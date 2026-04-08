<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GuruDataController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WalikelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

// Login
Route::get('/login', [LoginController::class, 'index']);

// Admin - Dashboard & Data Master
Route::get('/admin/dashboard/{id?}/{nama?}', [AdminController::class, 'tampilkan']);
Route::get('/admin/siswa', [SiswaController::class, 'tampilkan']);
Route::get('/admin/guru', [GuruDataController::class, 'tampilkan']);
Route::get('/admin/mapel', [MapelController::class, 'tampilkan']);
Route::get('/admin/kelas', [KelasController::class, 'tampilkan']);

// Guru & Wali Kelas
Route::get('/dashboard_guru/{id?}/{namaGuru?}', [GuruController::class, 'nama']);
Route::get('/dashboard_walikelas/{id?}/{nama?}', [WalikelasController::class, 'nama']);
