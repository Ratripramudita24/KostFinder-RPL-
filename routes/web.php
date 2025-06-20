<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\pemilik;
use App\Http\Controllers\pencari;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth','role:admin')->group(function(){
    route::get('/admin',[Admin::class,'dashboard'])->name('dashboard');
    Route::get('/lihatDaftarKost', [Admin::class, 'lihatDaftarKost'])->name('lihatDaftarKost');
    Route::get('/lihatReviewKost', [Admin::class, 'lihatReviewKost'])->name('lihatReviewKost');
});

Route::middleware('auth','role:pemilik')->group(function(){
    route::get('/pemilik',[pemilik::class,'dashboard'])->name('pemilik');
    Route::get('/lihatKost', [pemilik::class, 'lihatKost'])->name('lihatKost');
    Route::get('/tambahKost', [pemilik::class, 'tambahKost'])->name('tambahKost');
    route::match(['get', 'post'], '/editKost/{id}', [pemilik::class, 'editKost'])->name('editKost');
    Route::post('/simpanKost', [pemilik::class, 'simpanKost'])->name('simpanKost');
    Route::post('/hapus/{id}', [pemilik::class, 'hapus'])->name('hapus');
    Route::get('/lihat', [pemilik::class, 'lihat'])->name('lihat');
    Route::get('/lihatAlamat', [pemilik::class, 'lihatAlamat'])->name('lihatAlamat');

    Route::get('/lihatFasilitas', [pemilik::class, 'lihatFasilitas'])->name('lihatFasilitas');
    Route::get('/tambahFasilitas', [pemilik::class, 'tambahFasilitas'])->name('tambahFasilitas');
    route::match(['get', 'post'], '/editFasilitas/{id}', [pemilik::class, 'editFasilitas'])->name('editFasilitas');
    Route::post('/simpanFasilitas', [pemilik::class, 'simpanFasilitas'])->name('simpanFasilitas');
    Route::post('/delete/{id}', [pemilik::class, 'delete'])->name('delete');
});

Route::middleware('auth','role:pencari')->group(function(){
    route::get('/pencari',[pencari::class,'dashboard'])->name('pencari');
    Route::get('/telusuriKost', [pencari::class, 'telusuriKost'])->name('telusuriKost');
    Route::get('/tambahReview/{id}', [pencari::class, 'tambahReview'])->name('tambahReview');
    Route::post('/tambahReview/{id}', [pencari::class, 'simpanReview'])->name('simpanReview');
    Route::get('/lihatReview', [pencari::class, 'lihatReview'])->name('lihatReview');
});


Route::get('/register',[AuthController::class, 'registerLihat'])->name('register.lihat');
Route::post('/register/submit',[AuthController::class, 'registerSubmit'])->name('register.submit');

Route::get('/login',[AuthController::class, 'loginLihat'])->name('login.lihat');
Route::post('/login/submit',[AuthController::class, 'loginSubmit'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
