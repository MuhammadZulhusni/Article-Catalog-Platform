<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'zulhusni', 'title' => 'About Page']); // Send data array to view about
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});