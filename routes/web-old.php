<?php


use Illuminate\Support\Facades\Route;

use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

/// show all jobs
Route::get('/jobs', function () {
    //$jobs = job::all(); // N+1 Problem
    //$jobs = job::with('employer')->get(); // with eager loading, resolve N+1 Problem
    $jobs = job::with('employer')->latest()->simplePaginate(5); // with pagination use paginate or cursorpagination
    return view('jobs.index', [
        'jobs' => $jobs
        //'jobs' => job::all() // N+1 Problem, on way to do so : static function in job model class
    ]);
});

/// create job page
Route::get('/job/create', function () {
    return view('/jobs.create');
});

/// show detail job page
Route::get('/job/{id}', function ($id) {
    //$jobs = $jobs;
    //$job = Arr::first(job::all(), fn($job) => $job['id'] == $id); 
    //dd($job);
    $job = job::find($id);
    // echo '<pre>';
    // print_r($job);
    // echo  '</pre>';

    return view('jobs.show', ['job' => $job]);
});

//store
Route::post('/jobs', function () {
    //validation
    request()->validate([
        'title' => 'required',
        'salary' => 'required'
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);
    return redirect('/jobs');
});

// edit
Route::get('/job/{id}/edit', function ($id) {
    $job = job::findOrFail($id);
    return view('jobs.edit', ['job' => $job]);
});

//another way to do edit change id to job and give name to function 
// route model binding
Route::get('/job/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

//update
Route::patch('/job/{id}', function ($id) {
    //validation
    request()->validate([
        'title' => 'required',
        'salary' => 'required'
    ]);

    $job = job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    return redirect('/job/' . $job->id);
});

//destroy
Route::delete('/job/{id}', function ($id) {
    job::findOrFail($id)->delete();
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
