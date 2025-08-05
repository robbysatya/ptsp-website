<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Page Post
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/posts/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->name('view');

//Page Pelayanan
Route::get('/perizinan-online', [App\Http\Controllers\PelayananController::class, 'perizinan_online'])->name('perizinan-online');
Route::get('/layanan-perbantuan', [App\Http\Controllers\PelayananController::class, 'layanan_perbantuan'])->name('layanan-perbantuan');
Route::get('/faq', [App\Http\Controllers\PelayananController::class, 'faq'])->name('faq');

//Page Pengaduan
Route::get('/pengaduan-online', [App\Http\Controllers\PengaduanController::class, 'pengaduan_online'])->name('pengaduan-online');
Route::get('/whistleblowing', [App\Http\Controllers\PengaduanController::class, 'whistleblowing'])->name('whistleblowing');
Route::get('/standar-pengaduan', [App\Http\Controllers\PengaduanController::class, 'standar_pengaduan'])->name('standar-pengaduan');
Route::get('/sop-penanganan-pengaduan', [App\Http\Controllers\PengaduanController::class, 'sop_penanganan_pengaduan'])->name('sop-penanganan-pengaduan');

//Page Tentang Kami
Route::get('/perencanaan-pelaporan', [App\Http\Controllers\TentangController::class, 'perencanaan_pelaporan'])->name('perencanaan-pelaporan');
Route::get('/struktur-organisasi', [App\Http\Controllers\TentangController::class, 'struktur_organisasi'])->name('struktur-organisasi');
Route::get('/profil-organisasi', [App\Http\Controllers\TentangController::class, 'profil_organisasi'])->name('profil-organisasi');
Route::get('/tugas-pokok', [App\Http\Controllers\TentangController::class, 'tugas_pokok'])->name('tugas-pokok');
Route::get('/visi-misi', [App\Http\Controllers\TentangController::class, 'visi_misi'])->name('visi-misi');
