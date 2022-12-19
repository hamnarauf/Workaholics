<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function index()
    {
        $jobs = Job::all();
        #return view('jobs.index', ["jobs" => $jobs]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('jobs.create', ["categories" => $categories]);
    }

    public function store()
    {
        $job = new Job();
        $job->employer = request('employer');
        $job->employee = request('employee');
        $job->project_id = request('project_id');
        $job->save();
        return redirect()->route('jobs.index');
    }

    public function show($id)
    {
        $job = Job::find($id);
        return view('jobs.show', ["job" => $job]);
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('jobs.edit', ["job" => $job]);
    }

    public function update($id)
    {
        $job = Job::find($id);
        $job->employer = request('employer');
        $job->employee = request('employee');
        $job->project_id = request('project_id');
        $job->save();
        return redirect()->route('jobs.index');
    }

    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect()->route('jobs.index');
    }
}
