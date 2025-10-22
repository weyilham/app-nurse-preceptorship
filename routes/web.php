<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['ceklogin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // tambahkan semua page yang butuh login di sini
});


