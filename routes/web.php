<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
