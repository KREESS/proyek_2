<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RegisterController;

Route::get('/home', function () {
    return view('home');
});

// Route untuk login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route default untuk pengguna yang belum login
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'login']);
    Route::post('/', [AuthController::class, 'dologin']);
});

// Route untuk pengguna yang sudah login
Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/redirect', [RedirectController::class, 'cek']);

    // Route untuk superadmin
    Route::group(['middleware' => 'checkrole:1'], function () {
        Route::get('/admin', [AdminController::class, 'index']);
    });

    // Route untuk pegawai
    Route::group(['middleware' => 'checkrole:2'], function () {
        Route::get('/pegawai', [PenggunaController::class, 'index']);
    });
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
