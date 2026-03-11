<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::controller(RegistrationController::class)->group(function () {
    Route::get('/data', 'index')->name('pendaftaran.index'); // Admin
    Route::get('/register', 'registration')->name('pendaftaran.registration'); // Form
    Route::post('/register', 'store')->name('pendaftaran.store')->middleware('throttle:5,1');
    Route::get('/pendaftaran/sukses/{id}', 'sukses')->name('pendaftaran.sukses');
    Route::get('/data/{id}', 'show')->name('pendaftaran.show'); // Detail satu data
    Route::patch('/registration/{id}/update-status', 'updateStatus')->name('pendaftaran.update-status');
    
});