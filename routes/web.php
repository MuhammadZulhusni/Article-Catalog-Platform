<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'zulhusni', 'title' => 'About Page']); // Send data array to view about
});

// Route ti posts mean blog page
Route::get('/posts ', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
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
    ]]);
});


// Route to post, means lepas user clik 'read more' it will go to other page based on ID
// Instead of using ID, nk guna slug pun blh
Route::get('/posts/{slug}', function($slug) {
   // dd($id);  // Nk test data guna command ni dlu
    $posts = [
        [
            'id' => '1',
            'slug' => 'article-1',
            'title' => 'Article 1',
            'author' => 'zulhusni',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae pariatur dolor hic ipsum, illo est? Amet libero quo eligendi modi quis! Dolorem sunt quasi eveniet, placeat earum at dolore obcaecati?',
        ],
        [
            'id' => '2',
            'slug' => 'article-2',
            'title' => 'Article 2',
            'author' => 'zulhusni',
            'body' => 'Lorem2 ipsum, dolor sit amet consectetur adipisicing elit. Molestiae pariatur dolor hic ipsum, illo est? Amet libero quo eligendi modi quis! Dolorem sunt quasi eveniet, placeat earum at dolore obcaecati?',
        ]
        ];

        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});