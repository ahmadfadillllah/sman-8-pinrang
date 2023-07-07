<?php

namespace App\Http\Controllers;

use App\Models\AbsensiSiswa;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\NilaiEkstrakurikuler;
use App\Models\NilaiPrestasi;
use App\Models\NilaiSikap;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function inputNilaiSikap()
    {
        if(Auth::user()->role == 'Admin'){
            $kelas = Kelas::all();
        }else{
            $kelas = Kelas::where('guru', Auth::user()->name)->get();
        }
        return view('nilai_management.nilai_sikap', compact('kelas'));
    }

    public function detailNilaiSikap($id)
    {
        $siswa = Siswa::where('kode_kelas', $id)->get();
        $kode_kelas = $id;

        return view('nilai_management.detail_nilai_sikap', compact(['siswa', 'kode_kelas']));
    }

    public function storeNilaiSikap(Request $request, $id)
    {
        $request->validate([
            'kode_siswa' => ['required'],
            'jenis_sikap' => ['required'],
            'predikat' => ['required'],
            'desk' => ['required', 'max:255'],
            'semester' => ['required'],
        ]);


        NilaiSikap::create([
            'kode_siswa' => $request->kode_siswa,
            'jenis_sikap' => $request->jenis_sikap,
            'predikat' => $request->predikat,
            'desk' => $request->desk,
            'semester' => $request->semester,
        ]);

        return redirect(route('detail-nilai-sikap', ['id' => $id]));
    }

    public function showNilaiLapor()
    {
        return view('nilai_management.show_nilai_lapor');
    }

    public function showNilaiLaporSiswa(Request $request)
    {

        $request->validate([
            'no_induk' => ['required'],
            'semester' => ['required'],
        ]);


        $siswa = Siswa::where('no_induk', $request->no_induk)->first();
        try {
            $nilai = Nilai::where('kode_siswa', $siswa->id)->where('semester', $request->semester)->get();

            $nilaiSikapSpritual = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'spritual')->where('semester', $request->semester)->get();

            $nilaiSikapSosial = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'sosial')->where('semester', $request->semester)->get();

            $sakit = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 4)->count();

            $izin = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 2)->count();

            $bertugasKeluar = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 3)->count();

            $terlambat = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 5)->count();

            $tanpaKeterangan = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 6)->count();

            $absen = array("sakit" => $sakit, "izin" => $izin, "bertugasKeluar" => $bertugasKeluar, "terlambat" => $terlambat, "tanpaKeterangan" => $tanpaKeterangan);

            $ekstrakurikuler = NilaiEkstrakurikuler::where('kode_siswa', $siswa->id)->where('semester', $request->semester)->get();

            $prestasi = NilaiPrestasi::where('kode_siswa', $siswa->id)->where('semester', $request->semester)->get();

        } catch (\Throwable $th) {
            return view('nilai_management.components.search_not_found');
        }
        $title = $siswa->nama_siswa;
        $semester = $request->semester;



        return view('nilai_management.components.nilai_lapor', compact(['nilai', 'title', 'nilaiSikapSpritual', 'nilaiSikapSosial', 'siswa', 'semester', 'absen', 'ekstrakurikuler', 'prestasi']));
    }

    public function showNilaiLaporSiswaNameGanjil(Request $request, $name, $semesterr)
    {

        $siswa = Siswa::where('nama_siswa', $name)->first();
        try {
            $nilai = Nilai::where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

            $nilaiSikapSpritual = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'spritual')->where('semester', $semesterr)->get();

            $nilaiSikapSosial = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'sosial')->where('semester', $semesterr)->get();
            $nilaiHarian = Nilai::where('tipe_ujian', 'Ulangan Harian')->where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();
            $nilaiUTS = Nilai::where('tipe_ujian', 'UTS')->where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();
            $nilaiUAS = Nilai::where('tipe_ujian', 'UAS')->where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

            $sakit = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 4)->count();

            $izin = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 2)->count();

            $bertugasKeluar = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 3)->count();

            $terlambat = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 5)->count();

            $tanpaKeterangan = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 6)->count();

            $absen = array("sakit" => $sakit, "izin" => $izin, "bertugasKeluar" => $bertugasKeluar, "terlambat" => $terlambat, "tanpaKeterangan" => $tanpaKeterangan);

            $ekstrakurikuler = NilaiEkstrakurikuler::where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

            $prestasi = NilaiPrestasi::where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

        } catch (\Throwable $th) {
            return view('nilai_management.components.search_not_found');
        }
        $title = $siswa->nama_siswa;
        $semester = $semesterr;



        return view('nilai_management.components.nilai_lapor-siswa', compact(['nilai', 'nilaiHarian', 'nilaiUTS', 'nilaiUAS', 'title', 'nilaiSikapSpritual', 'nilaiSikapSosial', 'siswa', 'semester', 'absen', 'ekstrakurikuler', 'prestasi']));
    }

    public function showNilaiLaporSiswaNameGenap(Request $request, $name, $semesterr)
    {

        $siswa = Siswa::where('nama_siswa', $name)->first();
        try {
            $nilai = Nilai::where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

            $nilaiSikapSpritual = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'spritual')->where('semester', $semesterr)->get();

            $nilaiSikapSosial = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'sosial')->where('semester', $semesterr)->get();

            $nilaiHarian = Nilai::where('tipe_ujian', 'Ulangan Harian')->where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();
            $nilaiUTS = Nilai::where('tipe_ujian', 'UTS')->where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();
            $nilaiUAS = Nilai::where('tipe_ujian', 'UAS')->where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

            $sakit = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 4)->count();

            $izin = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 2)->count();

            $bertugasKeluar = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 3)->count();

            $terlambat = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 5)->count();

            $tanpaKeterangan = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 6)->count();

            $absen = array("sakit" => $sakit, "izin" => $izin, "bertugasKeluar" => $bertugasKeluar, "terlambat" => $terlambat, "tanpaKeterangan" => $tanpaKeterangan);

            $ekstrakurikuler = NilaiEkstrakurikuler::where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

            $prestasi = NilaiPrestasi::where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

        } catch (\Throwable $th) {
            return view('nilai_management.components.search_not_found');
        }
        $title = $siswa->nama_siswa;
        $semester = $semesterr;



        return view('nilai_management.components.nilai_lapor-siswa', compact(
            ['nilai',
            'nilaiHarian',
            'nilaiUTS',
            'nilaiUAS',
            'title',
            'nilaiSikapSpritual',
            'nilaiSikapSosial', 'siswa', 'semester', 'absen', 'ekstrakurikuler', 'prestasi']
        ));
    }

    public function showNilaiLaporSiswaNameReport(Request $request, $name, $semesterr)
    {

        $siswa = Siswa::where('nama_siswa', $name)->first();
        try {
            $nilai = Nilai::where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

            $nilaiSikapSpritual = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'spritual')->where('semester', $semesterr)->get();

            $nilaiSikapSosial = NilaiSikap::where('kode_siswa', $siswa->id)->where('jenis_sikap', 'sosial')->where('semester', $semesterr)->get();

            $nilaiHarian = Nilai::where('tipe_ujian', 'Ulangan Harian')->where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();
            $nilaiUTS = Nilai::where('tipe_ujian', 'UTS')->where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();
            $nilaiUAS = Nilai::where('tipe_ujian', 'UAS')->where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

            $sakit = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 4)->count();

            $izin = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 2)->count();

            $bertugasKeluar = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 3)->count();

            $terlambat = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 5)->count();

            $tanpaKeterangan = AbsensiSiswa::where('kode_siswa', $siswa->id)->where('kode_kehadiran', 6)->count();

            $absen = array("sakit" => $sakit, "izin" => $izin, "bertugasKeluar" => $bertugasKeluar, "terlambat" => $terlambat, "tanpaKeterangan" => $tanpaKeterangan);

            $ekstrakurikuler = NilaiEkstrakurikuler::where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

            $prestasi = NilaiPrestasi::where('kode_siswa', $siswa->id)->where('semester', $semesterr)->get();

        } catch (\Throwable $th) {
            return view('nilai_management.components.search_not_found');
        }
        $title = $siswa->nama_siswa;
        $semester = $semesterr;



        return view('report.raportsiswa', compact(
            ['nilai',
            'nilaiHarian',
            'nilaiUTS',
            'nilaiUAS',
            'title',
            'nilaiSikapSpritual',
            'nilaiSikapSosial', 'siswa', 'semester', 'absen', 'ekstrakurikuler', 'prestasi']
        ));
    }
}
