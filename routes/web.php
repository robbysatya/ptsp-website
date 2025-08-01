<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/posts/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->name('view');


Route::get('/perizinan-online', [App\Http\Controllers\PerizinanController::class, 'perizinan_online'])->name('perizinan-online');
