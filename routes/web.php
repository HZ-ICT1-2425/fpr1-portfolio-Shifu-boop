<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
