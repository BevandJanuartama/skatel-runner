<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes - RunFest 2026
|--------------------------------------------------------------------------
*/

// --- 1. ROUTE PUBLIK (Bisa diakses siapa saja) ---
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/home', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });

Route::controller(RegistrationController::class)->group(function () {
    Route::get('/register', 'registration')->name('pendaftaran.registration');
    Route::post('/register', 'store')->name('pendaftaran.store');
    Route::get('/pendaftaran/sukses/{id}', 'sukses')->name('pendaftaran.sukses');
});

// --- 2. AUTHENTICATION ADMIN ---
Route::get('/admin/login', function () {
    // Jika sudah login, langsung ke dashboard
    if (session('is_admin')) return redirect()->route('pendaftaran.index');
    return view('registrations.login'); 
})->name('admin.login');

Route::post('/admin/login', function (Request $request) {
    // Mengambil password dari .env (skatelrunner2026)
    $securePassword = env('ADMIN_PASSWORD', 'lari2026'); 

    if ($request->password === $securePassword) {
        session(['is_admin' => true]);
        return redirect()->route('pendaftaran.index');
    }
    
    return back()->with('error', 'Password salah! Akses ditolak.');
});

Route::get('/admin/logout', function () {
    session()->forget('is_admin');
    return redirect()->route('admin.login')->with('success', 'Berhasil keluar.');
})->name('admin.logout');


// --- 3. ROUTE PRIVATE (Panel Admin) ---
// Menggunakan pengecekan manual di dalam route untuk menghindari error Closure di middleware
Route::group([], function () {

    Route::controller(RegistrationController::class)->group(function () {
        
        // Halaman Database Utama
        Route::get('/data', function() {
            if (!session('is_admin')) return redirect()->route('admin.login');
            return app(RegistrationController::class)->index();
        })->name('pendaftaran.index');

        // Detail Peserta
        Route::get('/data/{id}', function($id) {
            if (!session('is_admin')) return redirect()->route('admin.login');
            return app(RegistrationController::class)->show($id);
        })->name('pendaftaran.show');

        // Update Status (Pending/Sukses/Batal)
        Route::patch('/data/{id}/status', function(Request $request, $id) {
            if (!session('is_admin')) return redirect()->route('admin.login');
            return app(RegistrationController::class)->updateStatus($request, $id);
        })->name('pendaftaran.updateStatus');

    });
});