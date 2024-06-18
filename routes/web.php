<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['name' => 'zulhusni']); // Send data array to view about
});

Route::get('/blog', function () {
    return view('blog');
});
