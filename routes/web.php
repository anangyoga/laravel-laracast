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
    $jobs = Job::with('employer')->simplePaginate(5);

    return view('jobs', [
        'jobs' => $jobs,
    ]);
});

Route::get('/job/{id}', function($id){
    $job = Job::find($id);  //it's not calling the hardcode data anymore, but using Job::find() to get data from TablePlus
    
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

