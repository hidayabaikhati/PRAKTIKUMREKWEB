<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini didefinisikan semua route web untuk aplikasi.
| Guest bisa mengakses dashboard, login, dan register.
| User yang login bisa mengakses home, about, post, mahasiswa, contact, dan profile.
|
*/

// ------------------------
// DASHBOARD / WELCOME PAGE (Guest)
// ------------------------
Route::get('/dashboard', function () {
    return view('welcome'); // Tampilan awal
})->name('dashboard');

// ------------------------
// LOGIN & REGISTER (Guest Only)
// ------------------------
Route::middleware('guest')->group(function () {
    // Register
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Login
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

// ------------------------
// LOGOUT (Authenticated Only, POST)
// ------------------------
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// ------------------------
// HALAMAN YANG HARUS LOGIN
// ------------------------
Route::middleware('auth')->group(function () {

    // Redirect root ke /home
    Route::get('/', fn() => redirect('/home'));

    // Halaman utama
    Route::get('/home', fn() => view('home'))->name('home');
    Route::get('/about', fn() => view('about'))->name('about');

    // Resource Controller
    Route::resource('post', PostController::class);
    Route::resource('mahasiswa', MahasiswaController::class);

    // Halaman kontak
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
