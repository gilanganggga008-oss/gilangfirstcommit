<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Direct halaman awal ke login
Route::get('/', function () {
    return redirect('/login');
});

// Route Login (Ditambah Anti-Cache agar tidak bisa di-BACK dari Dashboard)
Route::get('/masuk', function () {
    // Jika user sudah login, langsung lempar ke dashboard
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }

    return response()
        ->view('login')
        ->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Sun, 02 Jan 1990 00:00:00 GMT');
})->name('login');

Route::post('/masuk', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Dashboard (Anti-Cache & Proteksi Auth)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return response()
            ->view('dashboard')
            ->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sun, 02 Jan 1990 00:00:00 GMT');
    })->name('dashboard');
});