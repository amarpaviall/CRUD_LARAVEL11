<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => 40000,
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => 30000,
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => 25000,
            ],
        ]

    ]);
});

Route::get('/job/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => 40000,
        ],
        [
            'id' => 2,
            'title' => 'Developer',
            'salary' => 30000,
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => 25000,
        ],
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    //dd($job);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
