<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/about', function(){
    return view('about');
});

// we can return string like this
Route::get('/string', function () {
    return "This paragraph is actually just a string that's rendered on the page";
});

// we can also return json
Route::get('/json', function(){
    return ['foo'=> 'bar'];
});

