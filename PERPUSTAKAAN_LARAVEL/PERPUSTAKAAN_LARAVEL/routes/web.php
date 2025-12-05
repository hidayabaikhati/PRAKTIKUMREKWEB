<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::resource('/buku', BookController::class);
    Route::resource('/peminjaman', BorrowingController::class);

    Route::get('/peminjaman/return/{id}', [BorrowingController::class, 'returnBook'])->name('peminjaman.return');
});
