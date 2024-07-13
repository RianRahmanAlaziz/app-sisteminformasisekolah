<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalasController;

use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::get('/pengumuman', 'pengumuman');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::get('/getSiswa/{kelas_id}', [NilaiController::class, 'getSiswa']);
Route::get('/getNilai/{siswa_id}', [NilaiController::class, 'getNilai']);


Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/data-user-management', UserController::class);
    Route::get('/user-profil', [UserController::class, 'profil']);
    Route::put('/updateprofil/{id}', [DashboardController::class, 'updateprofil']);

    Route::resource('/input-nilai', NilaiController::class);
    Route::get('/data-nilai', [NilaiController::class, 'daftar']);
    Route::get('/nilai', [NilaiController::class, 'nilai']);

    Route::resource('/data-guru', GuruController::class);
    Route::resource('/data-siswa', SiswaController::class);
    Route::resource('/data-kelas', KelasController::class);
    Route::resource('/data-pelajaran', PelajaranController::class);
    Route::resource('/data-walikelas', WalasController::class);
    Route::resource('/data-slider', SliderController::class);
});
