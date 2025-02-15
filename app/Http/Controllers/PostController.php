<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }

    public function show($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', compact('post'));
    }
}
