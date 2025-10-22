<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin/login');
});

Route::post('/auth/logout', [HomeController::class, 'logout'])->name('auth.logout');


Route::middleware(['ceklogin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/module', [HomeController::class, 'module'])->name('module');


    // tambahkan semua page yang butuh login di sini
});


