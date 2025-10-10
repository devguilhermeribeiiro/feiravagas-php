<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index(): View
    {
        return view("jobs/index", [
            "jobs" => Job::all()
        ]);
    }

}
