<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ JobController::class, "index" ])->name("jobs");
Route::post('/create', [ JobController::class, "login" ])->name("login");
Route::view('/novavaga', 'jobs.login', [])->name("new_job");
