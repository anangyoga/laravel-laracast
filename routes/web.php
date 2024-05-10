<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Ola!'
    ]);
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/jobs', function(){
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/job/{id}', function($id){
    $job = Job::find($id);
    
    return view('job', ['job'=> $job]);
});

// we can return string like this
Route::get('/string', function () {
    return "This paragraph is actually just a string that's rendered on the page";
});

// we can also return json
Route::get('/json', function(){
    return ['foo'=> 'bar'];
});

