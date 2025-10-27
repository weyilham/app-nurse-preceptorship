<?php

use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\ForumController;
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
    Route::get('/diskusi', [ForumController::class, 'diskusi'])->name('diskusi');
    Route::get('/diskusi/show/{id}', [ForumController::class, 'showDiskusi'])->name('diskusi.show');
    Route::post('/comment/store', [ForumController::class, 'storeComment'])->name('comment.store');
    Route::get('/evaluasi', [EvaluasiController::class, 'index'])->name('evaluasi');
    Route::get('/evaluasi/kompetensi', [EvaluasiController::class, 'kompetensi'])->name('evaluasi.kompetensi');
    Route::get('/evaluasi/kompetensi/{id}', [EvaluasiController::class, 'getKompetensi'])->name('evaluasi.kompetensi.user');

    Route::get('/evaluasi/form', [EvaluasiController::class, 'form'])->name('evaluasi.form');
    Route::post('/penilaian/store', [EvaluasiController::class, 'store'])->name('penilaian.store');
    Route::post('/penilaian/simpan', [EvaluasiController::class, 'simpan'])->name('penilaian.simpan');




    // tambahkan semua page yang butuh login di sini
});


