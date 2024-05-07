<?php

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
        'jobs' => [
            [
                'id'=> 1,
                'title'=> 'Director',
                'salary'=> '50,000'
            ],
            [
                'id'=> 2,
                'title'=> 'Programmer',
                'salary'=> '10,000'
            ],
            [
                'id'=> 3,
                'title'=> 'Teacher',
                'salary'=> '30,000'
            ],
        ]
    ]);
});

Route::get('/job/{id}', function($id){
    $jobs = [
        [
            'id'=> 1,
            'title'=> 'Director',
            'salary'=> '50,000'
        ],
        [
            'id'=> 2,
            'title'=> 'Programmer',
            'salary'=> '10,000'
        ],
        [
            'id'=> 3,
            'title'=> 'Teacher',
            'salary'=> '30,000'
        ],
    ];

    // Arr is a class. Find the first item in array that matches criteria
    $job = Arr::first($jobs, fn($job)=> $job['id'] == $id );

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

