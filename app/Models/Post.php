<?php 

namespace App\Models; // Ni wajib letak, ad apply it dlm web.php
use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'title' => 'Article 1',
                'slug' => 'article-1',
                'author' => 'zulhusni',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae pariatur dolor hic ipsum, illo est? Amet libero quo eligendi modi quis! Dolorem sunt quasi eveniet, placeat earum at dolore obcaecati?',
            ],
            [
                'id' => '2',
                'slug' => 'article-2',
                'title' => 'Article 2',
                'author' => 'zulhusni',
                'body' => 'Lorem2 ipsum, dolor sit amet consectetur adipisicing elit. Molestiae pariatur dolor hic ipsum, illo est? Amet libero quo eligendi modi quis! Dolorem sunt quasi eveniet, placeat earum at dolore obcaecati?',
            ],
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug );  // Arrow function
        // dd($slug);  Nk test data guna command ni dlu

        // Ni nk buat page 404 if route unavailable
        if(!$post){
            abort(404);
        }

        return $post;
    }
}

