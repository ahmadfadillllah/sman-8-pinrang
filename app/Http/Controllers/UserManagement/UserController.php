<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\MappingGuru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // funtion for siswa

    public function showSiswa(){
        $siswa = Siswa::all();
        $users = DB::table('users')->where('role' ,'=', 'Siswa')->get();
        return view('users_management.show_siswa', compact('users', 'siswa'));
    }

    public function storeSiswa(Request $request){
        $request->validate([
            'name' => ['required',  'min:3', 'unique:users'],
            // 'email' => ['required', 'unique:users' , 'email'],
            'password' => ['required', 'min:8'],
        ]);

        $siswa = Siswa::where('nama_siswa', $request->name)->first();

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'no_induk' => $siswa->no_induk,
                'role' => $request->role,
                'password' => Hash::make($request->password),
                'avatar' => 'user.png',
            ]);
            return redirect('/show-siswa')->with('success', 'Siswa telah ditambahkan');
    }

    public function editSiswa($id){

        $siswa = User::where('id', $id)->first();
        return view('users_management.edit_siswa', compact('siswa'));
    }

    public function updateSiswa(Request $request, $id){
        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required', 'unique:users' , 'email'],
            'password' => ['required', 'min:8'],
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('show-siswa')->with('success', 'Siswa telah diupdate');
    }



    // function for guru

    public function showGuru(){
        $users = DB::table('users')->whereIn('role' , ['Guru', 'WaliKelas'])->get();
        $guru = Guru::all();
        return view('users_management.show_guru', compact('users', 'guru'));
    }


    public function storeGuru(Request $request){
        $request->validate([
            'name' => ['required',  'min:3', 'unique:users'],
            'email' => ['required', 'unique:users' , 'email'],
            'role' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => 'Guru',
                'password' => Hash::make($request->password),
                'avatar' => 'user.png',
            ]);
            return redirect('/show-guru')->with('success', 'Guru telah ditambahkan');
    }


    public function editGuru($id){

        $guru = User::where('id', $id)->first();
        return view('users_management.edit_guru', compact('guru'));
    }

    public function updateGuru(Request $request, $id){
        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required' , 'email'],
            'password' => ['required', 'min:8'],
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('show-guru')->with('success', 'Guru telah diupdate');
    }

    // function for all

    public function destroy($id){
        $user = User::where('id', $id)->first();
        $user->delete();
        if($user->role == "Guru"){
            return redirect('show-guru')->with('success', 'Guru telah dihapus');
        }else{
            return redirect('show-siswa')->with('success', 'Siswa telah dihapus');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function profile(){
        $user = Auth::user();
        return view('users_management.setting_profile', compact('user'));
    }

    public function updateGeneral(Request $request){

        $request->validate([
            'name' => ['required',  'min:3'],
            'email' => ['required' , 'email'],
        ]);

        $user = User::whereId(Auth::user()->id)->first();

        if($user->role == 'Siswa'){
            Siswa::where('nama_siswa', $user->name)->update([
                'nama_siswa' => $request->name,
            ]);

            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        if($user->role == 'Guru'){
            Guru::where('nama_guru', $user->name)->update([
                'nama_guru' => $request->name,
            ]);

            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        if($user->role == 'Admin'){
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        return redirect("show-profile")->with('success', 'Profile telah diupdate');
    }

    public function updatePassword(Request $request){

        $request->validate([
            'new_password' =>  'min:8',
            'confirm_new_password' => 'required_with:new_password|same:new_password|min:6',
        ]);

        User::where('id', Auth::user()->id)->update([
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'password' => Hash::make($request->new_password),
        ]);


        return redirect("show-profile")->with('success', 'Password telah diupdate');
    }

    public function updateAvatar(Request $request){

        $request->validate([
            'avatar' => 'required','mimes:png,jpg,jpeg,JPG',
        ]);

        $date = date('Ymd His gis');

        try {
            $produk = User::find(Auth::user()->id);

            if($request->hasFile('avatar')){
                $request->file('avatar')->move('app-assets/images/illustrator/', $date.$request->file('avatar')->getClientOriginalName());
                $produk->avatar = $date.$request->file('avatar')->getClientOriginalName();
                $produk->save();
            }

            return redirect()->back()->with('success', 'Avatar telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Avatar gagal diupdate');
        }
    }
}
