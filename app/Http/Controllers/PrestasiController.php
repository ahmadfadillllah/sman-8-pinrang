<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\NilaiPrestasi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrestasiController extends Controller
{
    public function inputNilai(){
        if(Auth::user()->role == 'Admin'){
            $kelas = Kelas::all();
        }else{
            $kelas = Kelas::where('guru', Auth::user()->name)->get();
        }
        return view('nilai_management.input_nilai_prestasi', compact('kelas'));
    }

    public function detailNilai($id){

        $siswa = Siswa::where('kode_kelas', $id)->get();
        $kode_kelas = $id;

        return view('nilai_management.detail_nilai_prestasi', compact(['siswa', 'kode_kelas']));

    }

    public function storeNilai(Request $request, $id){
        $request->validate([
            'kode_siswa' => ['required'],
            'jenisKegiatan' => ['required'],
            'keterangan' => ['required'],
            'semester' => ['required'],
        ]);

        NilaiPrestasi::create([
            'kode_siswa' => $request->kode_siswa,
            'jenisKegiatan' => $request->jenisKegiatan,
            'keterangan' => $request->keterangan,
            'semester' => $request->semester,

        ]);

        return redirect(route('detail-prestasi', ['id' => $id]));
    }
}
