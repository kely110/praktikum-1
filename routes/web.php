<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WalikelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});






Route::get('/login', [LoginController::class, 'index']);

// Route::prefix('lapor')->group(function () {
//     Route::get('/dashboard_admin', function () {
//         return 'Admin Dashboard';
//     });

//     Route::get('/dashboard_guru', function () {
//         return 'Guru Dashboard';
//     });
//     Route::get('/dashboard_walikelas', function () {
//         return 'Walikelas Dashboard';
//     });
// });

Route::get('/dashboard_admin/{id}/{nama}', [AdminController::class, 'name']);
Route::get('/dashboard_guru/{id}/{namaGuru}', [GuruController::class, 'nama']);
Route::get('/dashboard_walikelas/{id}/{nama}', [WalikelasController::class, 'nama']);
