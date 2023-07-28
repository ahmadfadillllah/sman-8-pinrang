<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UjianContoller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserManagement\UserController;
use App\Models\AbsensiSiswa;
use App\Models\Pelajaran;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact/post', [HomeController::class, 'contactpost'])->name('home.contact.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/user-home', function () {
        return view('home.user_home');
    })->name('user-home');

    // Begin : Chat

    Route::get('/chattas', 'App\Http\Controllers\ChatController@index')->name('message');
    Route::post('message', 'App\Http\Controllers\ChatController@sendMessage');  //
    Route::get('/message/{id}', 'App\Http\Controllers\ChatController@getMessage')->name('message');
    Route::get('/ShowMassage/{id}', 'App\Http\Controllers\ChatController@ShowMassage');
    Route::get('/messag/{id}', 'App\Http\Controllers\ChatController@getMessag')->name('message');
    Route::get('/subscribe', 'App\Http\Controllers\ChatController@subscribe')->name('subscribe');
    Route::delete('/unFollow/{id}', 'App\Http\Controllers\ChatController@remove_user');

    // End : Chat

    // Begin : Chat 2
    Route::get('/chat', [MessageController::class, 'index'])->name('chat');
    Route::get('/show-chat/{id}', [MessageController::class, 'show'])->name('chat');

    /////////////////////
    Route::get('/group/create', 'App\Http\Controllers\GroupController@create_form');
    Route::post('/group/create', 'App\Http\Controllers\GroupController@create');
    Route::get('/group/join', 'App\Http\Controllers\GroupController@join_form');
    Route::post('/group/join', 'App\Http\Controllers\GroupController@join');

    Route::get('/group/edit/{id}', 'App\Http\Controllers\GroupController@edit');

    Route::post('/group/update/{id}', 'App\Http\Controllers\GroupController@update');

    Route::delete('/group/delete/{id}', 'App\Http\Controllers\GroupController@deleteGroup');

    Route::get('/group/members_list/{id}', 'App\Http\Controllers\GroupController@members_list');

    Route::get('/remove_user/{id}/{user_id}', 'App\Http\Controllers\GroupController@remove_user');

    // End : Chat


    // akses area untuk admin
    Route::middleware(['isGlobalAccess'])->group(function () {

            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

            Route::get('/show-message', [DashboardController::class, 'message'])->name('dashboard.message');

            Route::get('/show-siswa', [UserController::class, 'showSiswa'])->name('show-siswa');
            Route::post('/show-siswa', [UserController::class, 'storeSiswa']);

            Route::get('/show-siswa/{id}/edit', [UserController::class, 'editSiswa'])->name('edit-siswa');
            Route::put('/show-siswa/{id}', [UserController::class, 'updateSiswa']);
            Route::delete('/show-siswa/{id}', [UserController::class, 'destroy'])->name('delete');

            Route::get('/show-guru', [UserController::class, 'showGuru'])->name('show-guru');
            Route::post('/show-guru', [UserController::class, 'storeGuru']);

            Route::get('/show-guru/{id}/edit', [UserController::class, 'editGuru'])->name('edit-guru');
            Route::put('/show-guru/{id}', [UserController::class, 'updateGuru']);

            Route::get('/input-jadwal', [JadwalController::class, 'inputJadwal'])->name('input-jadwal');
            Route::post('/input-jadwal', [JadwalController::class, 'store']);

            Route::get('/detail-jadwal/{id}/edit', [JadwalController::class, 'editJadwal'])->name('edit-jadwal');
            Route::put('/detail-jadwal/{id}/edit/{kode_kelas}', [JadwalController::class, 'updateJadwal'])->name('update-jadwal');
            Route::delete('/detail-jadwal/{id}', [JadwalController::class, 'destroy'])->name('delete-jadwal');

            Route::post('/show-kelas', [KelasController::class, 'store']);
            Route::post('/show-kelas/update/{id}', [KelasController::class, 'updateKelas'])->name('updateKelas');
            Route::delete('/show-kelas/{id}', [KelasController::class, 'destroy'])->name('delete-kelas');


            Route::get('/show-data-siswa', [DataController::class, 'showDataSiswa'])->name('show-data-siswa');
            Route::post('/show-data-siswa', [DataController::class, 'storeSiswa']);
            Route::get('/show-data-siswa/{id}/edit', [DataController::class, 'editSiswa'])->name('edit-data-siswa');
            Route::put('/show-data-siswa/{id}', [DataController::class, 'updateSiswa']);
            Route::delete('/show-data-siswa/{id}', [DataController::class, 'destroySiswa'])->name('delete-data-siswa');


            Route::post('/show-data-guru', [DataController::class, 'storeGuru']);
            Route::get('/show-data-guru/{id}/edit', [DataController::class, 'editGuru'])->name('edit-data-guru');
            Route::put('/show-data-guru/{id}', [DataController::class, 'updateGuru']);
            Route::delete('/show-data-guru/{id}', [DataController::class, 'destroyGuru'])->name('delete-data-guru');



            Route::get('/input-pelajaran', [PelajaranController::class, 'inputPelajaran'])->name('input-pelajaran');
            Route::post('/input-pelajaran', [PelajaranController::class, 'storePelajaran']);

            Route::get('/show-kelas', [KelasController::class, 'showKelas'])->name('show-kelas');

            Route::get('/show-pelajaran', [PelajaranController::class, 'showPelajaran'])->name('show-pelajaran');
            Route::delete('/show-pelajaran/{id}', [PelajaranController::class, 'destroy'])->name('delete-pelajaran');




        Route::get('/show-jadwal/mengajar', [JadwalController::class, 'showJadwalMengajar'])->name('show-jadwal-mengajar');

        Route::get('/show-jadwal/guru', [JadwalController::class, 'showJadwalGuru'])->name('show-jadwal-guru');
        Route::get('/show-jadwal/guru/{name}', [JadwalController::class, 'showJadwalGuruName'])->name('show-jadwal-guru-name');

        Route::get('/show-absensi-siswa', [AbsensiController::class, 'showAbsen'])->name('show-absensi-siswa');
        Route::get('/show-absensi-siswa/{id}/detail', [AbsensiController::class, 'detailAbsen'])->name('detail-absen');
        Route::delete('/show-absensi-siswa/{id}', [AbsensiController::class, 'destroy'])->name('delete-absen');
        Route::post('/show-absensi-siswa', [AbsensiController::class, 'storePertemuan'])->name('input-pertemuan');
        Route::get('/show-absensi-siswa/{id}/detail/{kode_pertemuan}', [AbsensiController::class, 'absensiSiswa'])->name('absensi-siswa');
        Route::post('/show-absensi-siswa/{id}/detail/{kode_pertemuan}', [AbsensiController::class, 'storeAbsen'])->name('input-absen');
        Route::delete('/show-absensi-siswa/{id}/detail/{kode_pertemuan}', [AbsensiController::class, 'destroy']);


        Route::get('/input-ujian', [UjianContoller::class, 'inputUjian'])->name('input-ujian');
        Route::post('/input-ujian', [UjianContoller::class, 'storeJadwalUjian'])->name('input-ujian');

        Route::delete('/show-ujian/{id}', [UjianContoller::class, 'destroy'])->name('delete-ujian');

        Route::get('/input-nilai/sikap', [NilaiController::class, 'inputNilaiSikap'])->name('input-nilai-sikap');
        Route::get('/input-nilai/sikap/{id}/detail', [NilaiController::class, 'detailNilaiSikap'])->name('detail-nilai-sikap');
        Route::post('/input-nilai/sikap/{id}/detail', [NilaiController::class, 'storeNilaiSikap']);

        Route::get('input-nilai-ujian', [UjianContoller::class, 'inputNilaiUjian'])->name('input-nilai-ujian');
        Route::get('input-nilai-ujian/{id}/detail', [UjianContoller::class, 'detailNilaiUjian'])->name('detail-nilai-ujian');
        Route::post('input-nilai-ujian/{id}/detailpost', [UjianContoller::class, 'storeNilaiUjian'])->name('detail-nilai-ujian-post');

        Route::get('edit-nilai-ujian/{id}/detail', [UjianContoller::class, 'editdetailNilaiUjian'])->name('edit-detail-nilai-ujian');
        Route::post('edit-nilai-ujian/{id}/detailpost', [UjianContoller::class, 'editstoreNilaiUjian'])->name('edit-detail-nilai-ujian-post');

        Route::get('/input-nilai/ekstrakurikuler', [EkstrakurikulerController::class, 'inputNilai'])->name('input-ekstrakurikuler');
        Route::get('/input-nilai/ekstrakurikuler/{id}/detail', [EkstrakurikulerController::class, 'detailNilai'])->name('detail-ekstrakurikuler');
        Route::post('/input-nilai/ekstrakurikuler/{id}/detail', [EkstrakurikulerController::class, 'storeNilai']);

        Route::get('/input-nilai/prestasi', [PrestasiController::class, 'inputNilai'])->name('input-prestasi');
        Route::get('/input-nilai/prestasi/{id}/detail', [PrestasiController::class, 'detailNilai'])->name('detail-prestasi');
        Route::post('/input-nilai/prestasi/{id}/detail', [PrestasiController::class, 'storeNilai']);
    });

    Route::middleware(['isWaliKelas'])->group(function () {


    });

    Route::get('/show-ujian', [UjianContoller::class, 'showUjian'])->name('show-ujian');


    Route::get('/show-data-guru', [DataController::class, 'showDataGuru'])->name('show-data-guru');

    Route::get('/show-jadwal/belajar', [JadwalController::class, 'showJadwal'])->name('show-jadwal-belajar');

    Route::get('/detail-jadwal/{id}/detail', [JadwalController::class, 'detailJadwal'])->name('detail-jadwal');

    Route::get('/detail-jadwal-siswa/{id}', [JadwalController::class, 'detailJadwalSiswa'])->name('detail-jadwal-siswa');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('show-profile', [UserController::class, 'profile'])->name('show-profile');
    Route::put('show-profile/general', [UserController::class, 'updateGeneral'])->name('edit-general');
    Route::put('show-profile', [UserController::class, 'updatePassword'])->name('edit-password');
    Route::put('show-profile/avatar', [UserController::class, 'updateAvatar'])->name('edit-avatar');

    Route::get('/show-nilai/lapor', [NilaiController::class, 'showNilaiLapor'])->name('show-nilai-lapor');
    Route::post('/show-nilai/lapor/siswa', [NilaiController::class, 'showNilaiLaporSiswa'])->name('show-nilai-lapor-siswa');
    Route::get('/show-nilai/lapor/siswa-name-ganjil/{name}/{semester}', [NilaiController::class, 'showNilaiLaporSiswaNameGanjil'])->name('show-nilai-lapor-siswa-name-ganjil');
    Route::get('/show-nilai/lapor/siswa-name-genap/{name}/{semester}', [NilaiController::class, 'showNilaiLaporSiswaNameGenap'])->name('show-nilai-lapor-siswa-name-genap');
    Route::get('/show-nilai/lapor/siswa-name-report/{name}/{semester}', [NilaiController::class, 'showNilaiLaporSiswaNameReport'])->name('show-nilai-lapor-siswa-name-report');

    Route::get('show-nilai/ujian', [UjianContoller::class, 'showNilaiUjian'])->name('show-nilai-ujian');
    Route::get('show-nilai/ujian/siswa/{id}', [UjianContoller::class, 'showNilaiUjianSiswa'])->name('show-nilai-ujian-siswa');
    Route::delete('show-nilai/ujian/siswa/{id}', [UjianContoller::class, 'destroyilaiUjianSiswa'])->name('delete-nilai-ujian');
    Route::get('show-nilai/ujian/siswa-name/{name}', [UjianContoller::class, 'showNilaiUjianSiswaName'])->name('show-nilai-ujian-siswa-name');

    Route::get('show-nilai/ujian/siswa-detail/{id}/{name}', [UjianContoller::class, 'showNilaiUjianSiswaDetail'])->name('show-nilai-ujian-siswa-detail');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'store']);
