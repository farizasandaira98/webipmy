<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        //Route Anggota Di Admin
        Route::get('/home/anggota', [App\Http\Controllers\DataAnggotaController::class, 'index']);
        Route::get('/home/anggota/tambah', [App\Http\Controllers\DataAnggotaController::class, 'tambah']);
        Route::post('/home/anggota/store', [App\Http\Controllers\DataAnggotaController::class, 'store']);
        Route::get('/home/anggota/edit/{id}', [App\Http\Controllers\DataAnggotaController::class, 'edit']);
        Route::post('/home/anggota/update/{id}', [App\Http\Controllers\DataAnggotaController::class, 'update']);
        Route::get('/home/anggota/hapus/{id}', [App\Http\Controllers\DataAnggotaController::class, 'destroy']);
        Route::get('/home/anggota/cari', [App\Http\Controllers\DataAnggotaController::class, 'search']);
        Route::get('/home/anggota/cetak', [App\Http\Controllers\DataAnggotaController::class, 'cetak']);

        //Route Kegiatan Di Admin
        Route::get('/home/kegiatan', [App\Http\Controllers\DataKegiatanController::class, 'index']);
        Route::get('/home/kegiatan/tambah', [App\Http\Controllers\DataKegiatanController::class, 'tambah']);
        Route::post('/home/kegiatan/store', [App\Http\Controllers\DataKegiatanController::class, 'store']);
        Route::get('/home/kegiatan/edit/{id}', [App\Http\Controllers\DataKegiatanController::class, 'edit']);
        Route::post('/home/kegiatan/update/{id}', [App\Http\Controllers\DataKegiatanController::class, 'update']);
        Route::get('/home/kegiatan/hapus/{id}', [App\Http\Controllers\DataKegiatanController::class, 'destroy']);
        Route::get('/home/kegiatan/cari', [App\Http\Controllers\DataKegiatanController::class, 'search']);


        //Route Informasi Organisasi Di Admin
        Route::get('/home/organisasi', [App\Http\Controllers\OrganisasiController::class, 'index']);
        Route::get('/home/organisasi/tambah', [App\Http\Controllers\OrganisasiController::class, 'tambah']);
        Route::post('/home/organisasi/store', [App\Http\Controllers\OrganisasiController::class, 'store']);
        Route::get('/home/organisasi/edit/{id}', [App\Http\Controllers\OrganisasiController::class, 'edit']);
        Route::post('/home/organisasi/update/{id}', [App\Http\Controllers\OrganisasiController::class, 'update']);
        Route::get('/home/organisasi/hapus/{id}', [App\Http\Controllers\OrganisasiController::class, 'destroy']);

        //Route Informasi Struktur Di Admin
        Route::get('/home/struktur', [App\Http\Controllers\StrukturController::class, 'index']);
        Route::get('/home/struktur/tambah', [App\Http\Controllers\StrukturController::class, 'tambah']);
        Route::post('/home/struktur/store', [App\Http\Controllers\StrukturController::class, 'store']);
        Route::get('/home/struktur/edit/{id}', [App\Http\Controllers\StrukturController::class, 'edit']);
        Route::post('/home/struktur/update/{id}', [App\Http\Controllers\StrukturController::class, 'update']);
        Route::get('/home/struktur/hapus/{id}', [App\Http\Controllers\StrukturController::class, 'destroy']);

});

