<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\JadwalUjian;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Pelajaran;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UjianContoller extends Controller
{
    public function showUjian()
    {
        $jadwalUjian = JadwalUjian::orderBy('tanggal', 'asc')->get();
        return view('ujian_management.show_jadwal_ujian', compact('jadwalUjian'));
    }

    public function inputUjian()
    {
        $hari = Hari::all();
        $pelajaran = Pelajaran::all();
        return view('ujian_management.input_jadwal_ujian', compact(['hari', 'pelajaran']));
    }

    public function storeJadwalUjian(Request $request){
        $request->validate([
            'tanggal' => ['required'],
            'hari' => ['required'],
            'jamStart' => ['required'],
            'jamEnd' => ['required'],
            'matapelajaran' => ['required'],
        ]);

        $jam = "$request->jamStart - $request->jamEnd";
        JadwalUjian::create([
            'tanggal' => $request->tanggal,
            'kode_hari' => $request->hari,
            'jam' => $jam,
            'kode_pelajaran' => $request->matapelajaran,
        ]);

        return redirect('input-ujian');
    }

    public function destroy($id){
        $jadwalUjian = JadwalUjian::where('id', $id)->first();
        $jadwalUjian->delete();

        return redirect('show-ujian');
    }


    // Nilai Ujian Controller

    public function inputNilaiUjian(){
        if(Auth::user()->role == 'Admin'){
            $kelas = Kelas::all();
        }else{
            $kelas = Kelas::where('guru', Auth::user()->name)->get();
        }
        return view('ujian_management.input_nilai_ujian', compact('kelas'));
    }

    public function detailNilaiUjian($id){
        $siswa = Siswa::where('kode_kelas', $id)->get();
        $guru = Guru::all();
        // $select_guru = Guru::where('nama_guru', Auth::user()->name)->first();
        $pelajaran = Pelajaran::all();
        $kode_kelas = $id;

        return view('ujian_management.detail_nilai_ujian', compact(['siswa', 'guru', 'pelajaran', 'kode_kelas']));

    }

    public function storeNilaiUjian(Request $request, $id){
        $request->validate([
            'kode_siswa' => ['required'],
            'kode_guru' => ['required'],
            'kode_pelajaran' => ['required'],
            'semester' => ['required'],
            'tahun_akademik' => ['required'],
            'nilai' => ['required', 'max:3'],
            'desk_pengetahuan' => ['required', 'max:255'],
            'desk_keterampilan' => ['required', 'max:255'],
        ]);

        $nilai = $request->nilai;
        if($nilai >= 92){
            $predikat = 'A';
        }
        else if($nilai >= 83 && $nilai < 92){
            $predikat = 'B';
        }
        else if($nilai >= 75 && $nilai < 83){
            $predikat = 'C';

        }
        else if($nilai < 75){
            $predikat = 'D';
        }

        Nilai::create([
            'kode_siswa' => $request->kode_siswa,
            'kode_kelas' => $id,
            'kode_guru' => $request->kode_guru,
            'kode_pelajaran' => $request->kode_pelajaran,
            'semester' => $request->semester,
            'tahun_akademik' => $request->tahun_akademik,
            'nilai' => $request->nilai,
            'predikat' => $predikat,
            'desk_pengetahuan'  => $request->desk_pengetahuan,
            'desk_keterampilan'  => $request->desk_keterampilan,
        ]);

        return redirect(route('detail-nilai-ujian', ['id' => $id]));
    }

    public function showNilaiUjian(){
        if(Auth::user()->role == 'Admin'){
            $kelas = Kelas::all();
        }else{
            $kelas = Kelas::where('guru', Auth::user()->name)->get();
        }
        return view('ujian_management.show_nilai_ujian', compact('kelas'));
    }

    public function showNilaiUjianSiswa(Request $request, $id){

        $kelas = Kelas::where('id', $id)->first();

        $nilai = Nilai::with('siswa', 'kelas', 'pelajaran')->where('kode_kelas', $id)->get()->sortBy('siswa.nama_siswa');

        return view('ujian_management.components.nilai_ujian', compact('nilai', 'kelas'));
    }

    // ...

}
