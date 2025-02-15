<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'My First Blog Post',
            'slug' => 'my-first-blog-post',
            'content' => 'This is my blog post.!',
        ]);

        Post::create([
            'title' => 'Learning Laravel',
            'slug' => 'learning-laravel',
            'content' => 'Laravel makes web development so much easier!',
        ]);
    }
}

