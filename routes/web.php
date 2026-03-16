<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});






Route::get('/login', [LoginController::class, 'index']);
Route::get('/admin/dashboard', [AdminController::class, 'index']);
