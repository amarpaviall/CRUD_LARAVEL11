<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

use App\Models\Job;

// Route::get('/', function () {
//     return view('home');
// });

//shortcut to view pages
Route::view('/', 'home');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/job/create', 'create');
//     Route::get('/job/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/job/{job}/edit', 'edit');
//     Route::patch('/job/{job}', 'update');
//     Route::delete('/job/{job}', 'destroy');
// });

// all methods in just one resource
Route::resource('job', JobController::class); //job will be all pages url

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact', 'contact');
