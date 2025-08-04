<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Page Post
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/posts/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->name('view');

//Page Pelayanan
Route::get('/perizinan-online', [App\Http\Controllers\PerizinanController::class, 'perizinan_online'])->name('perizinan-online');

//Page Tentang Kami
Route::get('/perencanaan-pelaporan', [App\Http\Controllers\TentangController::class, 'perencanaan_pelaporan'])->name('perencanaan-pelaporan');
Route::get('/struktur-organisasi', [App\Http\Controllers\TentangController::class, 'struktur_organisasi'])->name('struktur-organisasi');
Route::get('/profil-organisasi', [App\Http\Controllers\TentangController::class, 'profil_organisasi'])->name('profil-organisasi');
Route::get('/tugas-pokok', [App\Http\Controllers\TentangController::class, 'tugas_pokok'])->name('tugas-pokok');
Route::get('/visi-misi', [App\Http\Controllers\TentangController::class, 'visi_misi'])->name('visi-misi');
