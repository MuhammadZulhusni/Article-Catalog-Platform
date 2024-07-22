<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'zulhusni', 'title' => 'About Page']); // Send data array to view 'about'
});

// Route posts mean 'blog page'
Route::get('/posts ', function () {  // Call class 'Post'
    // Setkan variable sbb nk sorting blog yg latest duduk kt atas dlu & solve lazy loading to eager loading using 'with()', Queries akan lebih berkurang if using this method
    // $posts = Post::with(['author', 'category'])->latest()->get(); 

    $posts = Post::latest()->get();

    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]); 
});

// Route to post, means lepas user clik 'read more' it will go to other page based on ID
// Instead of using ID, nk guna slug pun blh
Route::get('/posts/{post:slug}', function( Post $post) {
   return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user) {

    // Lazy eager loading 
    // $posts = $user->posts->load('category', 'author');

    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name, 
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {

    // Lazy eager loading 
    // $posts = $category->posts->load('category', 'author');

    return view('posts', [
        'title' => 'Articles in: ' . $category->name, 
        'posts' => $category->posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

 