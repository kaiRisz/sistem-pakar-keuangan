<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Publik
Route::view('/', 'landing')->name('landing');

// Hanya untuk tamu (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Mahasiswa
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

// Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
});