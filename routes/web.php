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
    // latest will give descending order sort
    $jobs = Job::with('employer')->latest()->simplePaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

Route::get('/jobs/create', function(){
    return view('jobs.create');
});

// /job/{id} is called Wildcard in laravel. if you want to make another route with /job, it must be ABOVE wildcard. Keep in mind that Wildcard should generaly closer to the BOTTOM
Route::get('/jobs/{id}', function($id){
    $job = Job::find($id);  //it's not calling the hardcode data anymore, but using Job::find() to get data from TablePlus
    
    return view('jobs.show', ['job'=> $job]);
});

Route::post('/jobs', function(){
    // if this validation failed, Laravel will take care of it by sending it to previous Form and send error variables
    request()->validate([
        // fields from the Form on Front-end
        'title'=> ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // dd(request()->all());

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        // temporary hardcoded
        'employer_id' => 1, 
    ]);

    return redirect('/jobs');
});

// we can return string like this
Route::get('/string', function () {
    return "This paragraph is actually just a string that's rendered on the page";
});

// we can also return json
Route::get('/json', function(){
    return ['foo'=> 'bar'];
});

