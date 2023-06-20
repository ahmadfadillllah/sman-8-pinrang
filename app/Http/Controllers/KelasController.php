<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function showKelas(){
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('siswa_management.show_kelas', compact('kelas', 'guru'));
    }

    public function store(Request $request){
        $request->validate([
            'kelas' => ['required' , 'unique:kelas']
        ]);

        Kelas::create([
            'kelas' => $request->kelas,
            'guru' => $request->guru
        ]);

        return redirect('show-kelas')->with('success', 'Kelas telah ditambahkan');
    }

    public function updateKelas(Request $request, $id){
        $request->validate([
            'kelas' => ['required']
        ]);


        Kelas::where('id', $id)->update([
            'kelas' => $request->kelas,
            'guru' => $request->guru,
        ]);

        return redirect()->back()->with('success', 'Kelas telah diupdate');
    }

    public function destroy($id){
        $kelas = Kelas::where('id', $id)->first();
        $kelas->delete();

        return redirect('show-kelas')->with('success', 'Kelas telah dihapus');
    }
}
