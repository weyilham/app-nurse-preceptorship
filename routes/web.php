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
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::put('/user/update/{id}', [HomeController::class, 'update'])->name('user.update');


    // tambahkan semua page yang butuh login di sini
});


