<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => job::all()
    ]);
});

Route::get('/job/{id}', function ($id) {
    //$jobs = $jobs;
    $job = Arr::first(job::all(), fn($job) => $job['id'] == $id);
    //dd($job);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
