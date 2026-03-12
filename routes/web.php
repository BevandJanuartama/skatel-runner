<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });

Route::controller(RegistrationController::class)->group(function () {
    Route::get('/data', 'index')->name('pendaftaran.index');
    Route::get('/data/{id}', 'show')->name('pendaftaran.show');
    Route::patch('/data/{id}/status', 'updateStatus')->name('pendaftaran.updateStatus');
    
    Route::get('/register', 'registration')->name('pendaftaran.registration');
    Route::post('/register', 'store')->name('pendaftaran.store');
    Route::get('/pendaftaran/sukses/{id}', 'sukses')->name('pendaftaran.sukses');
});