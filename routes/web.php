<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ JobController::class, "index" ])->name("jobs");

Route::post('/newlogin', [ JobController::class, "login" ])->name("newlogin");
Route::post('/jobs', [ JobController::class, "newJob" ])->name("newjob");

Route::view('/login', 'jobs.login', [])->name("login");
