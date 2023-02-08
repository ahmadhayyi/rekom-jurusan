<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginSiswaController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\KMeansController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JawabController;
use App\Http\Controllers\MinatController;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Soal;
use App\Models\User;
use App\Models\Nilai;
use App\Models\Jurusan;
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

Route::middleware(['admin'])->group(function() {
    Route::get('/', DashboardController::class);
    Route::resource('/mapel', MapelController::class);
    Route::resource('/minat', MinatController::class);
    Route::get('/soal/mapel/{id}', [SoalController::class, 'custom']);
    Route::resource('/soal', SoalController::class);
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/siswa', SiswaController::class);
    Route::resource('/admin', AdminController::class);
    Route::resource('/kmeans', KMeansController::class);
});

Route::middleware(['siswa'])->group(function() {
    Route::get('/jawab/minat', [JawabController::class, 'createMinat']);
    Route::post('/jawab/minat', [JawabController::class, 'storeMinat']);
    Route::resource('/jawab', JawabController::class);
    Route::get('/informasi', InformasiController::class);
    Route::get('/hasil', HasilController::class);
});

Route::controller(LoginAdminController::class)->group(function(){
    Route::get('/login/admin', 'admin')->middleware('guest');
    Route::post('/login/admin', 'auth_admin');
});
Route::controller(LoginSiswaController::class)->group(function(){
    Route::get('/login', 'siswa')->name('login')->middleware('guest');
    Route::post('/login', 'auth_siswa');
});
Route::post('/logout', LogoutController::class)->name('logout');

