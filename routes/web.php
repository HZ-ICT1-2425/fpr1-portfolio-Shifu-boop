<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\FaqController;

Route::get('/', [StaticContentController::class, 'home'])->name('home');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');


Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Blog Routes
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{posts:slug}', [PostController::class, 'show'])->name('posts.show'); // Fixed for slug
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{posts}', [PostController::class, 'destroy'])->name('posts.destroy');
