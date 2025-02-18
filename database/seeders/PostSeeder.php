<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'idk',
            'slug' =>'i-d-k',
            'content' => 'IDK',
        ]);

        Post::create([
            'title' => 'Learning Laravel',
            'slug' => 'learning-laravel',
            'content' => 'Laravel makes web development so much easier!',
        ]);
    }
}

