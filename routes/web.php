<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'zulhusni', 'title' => 'About Page']); // Send data array to view 'about'
});

// Route posts mean blog page
Route::get('/posts ', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]); // Call class 'Post'
});


// Route to post, means lepas user clik 'read more' it will go to other page based on ID
// Instead of using ID, nk guna slug pun blh
Route::get('/posts/{post:slug}', function( Post $post) {

   return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});