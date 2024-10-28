<?php


use Illuminate\Support\Facades\Route;

use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => job::all() // static function in job model class
    ]);
});

Route::get('/job/{id}', function ($id) {
    //$jobs = $jobs;
    //$job = Arr::first(job::all(), fn($job) => $job['id'] == $id); 
    //dd($job);
    $job = job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
