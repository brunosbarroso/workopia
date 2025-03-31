<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $title = 'Available Jobs';
    $jobs = [
        'Job 1',
        'Job 2',
        'Job 3',
        'Job 4'
    ];

    return view('jobs.index', compact('title', 'jobs'));
})->name('jobs');
