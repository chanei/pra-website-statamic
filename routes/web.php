<?php

use Illuminate\Support\Facades\Route;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('/home-test', function () {
    return view('static.home');
});

Route::get('/contact-test', function () {
    return view('static.contact');
});

Route::get('/blog-test', function () {
    return view('static.blog');
});

