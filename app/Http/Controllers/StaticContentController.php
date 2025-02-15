<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    public function home() {
        return view('home');
    }

    public function profile() {
        return view('profile');
    }

    public function faq() {
        return view('faq');
    }

    public function dashboard() {
        return view('dashboard');
    }
    public function blog() {
        return view('blog');
    }
}
