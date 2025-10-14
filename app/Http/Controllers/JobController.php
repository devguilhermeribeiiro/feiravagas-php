<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index(): View
    {
        return view("jobs/index", [
            "jobs" => Job::all()->reverse()
        ]);
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route("jobs");
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas'
        ])->onlyInput("email");
    }

    public function newJob(Request $request): RedirectResponse
    {
        $data = $request->all();
        $job = new Job($data);

        if ($job->save()) {
            return redirect()->route("jobs");
        }
    }
}
