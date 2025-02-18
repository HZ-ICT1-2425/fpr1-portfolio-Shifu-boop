<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DashboardController;

Route::get('/', [StaticContentController::class, 'home'])->name('home');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::put('/dashboard/{course}', [DashboardController::class, 'update'])->name('dashboard.update');

// FAQ Routes
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::post('/faq', [FaqController::class, 'store']);
Route::put('/faq/{faq}', [FaqController::class, 'update']);
Route::delete('/faq/{faq}', [FaqController::class, 'destroy']);

// Blog & Posts Routes
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show'); // Fixed for slug
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
