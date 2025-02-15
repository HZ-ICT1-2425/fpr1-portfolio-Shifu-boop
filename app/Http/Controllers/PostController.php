<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get(); // Fetch all posts, newest first
        return view('blog', compact('posts'));
    }

    // Fetch a single blog post based on the slug
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', compact('post'));
    }
}
