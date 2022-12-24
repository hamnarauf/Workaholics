<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Milestone;
use App\Models\Job;

class MilestonesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //All milestones to be displayed on the index page
        $milestones = Milestone::all()->where('job_id', request('id'));
        return view('milestones.index', ["milestones" => $milestones, "job_id" => request('id')]);
    }

    public function create($id)
    {
        return view('milestones.create', ["job_id" => $id]);
    }

    public function store()
    {
        $milestone = new Milestone();
        $milestone->job_id = request('job_id');
        $milestone->name = request('name');
        $milestone->description = request('description');
        $milestone->budget = request('budget');
        $milestone->expected_by = request('expected_by');
        $job = Job::find(request('job_id'));
        if (auth()->user()->id == $job->employer) {
            $milestone->approved_by_employer = 1;
        } elseif (auth()->user()->id == $job->approved_by_employee) {
            $milestone->approved_by_employee = 1;
        }
        // $milestone->filename = request('filename');
        // $milestone->file_path = request('file_path');        
        $milestone->save();
        return redirect('/milestones/' . request('job_id'));
    }

    public function show($id)
    {
        $milestones = Milestone::all()->where('job_id', $id);
        return view('milestones.index', ["milestones" => $milestones]);
    }

    public function edit($id)
    {
        $milestone = Milestone::find($id);
        return view('milestones.edit', ['milestone' => $milestone]);
    }

    public function update($id)
    {
        $milestone = Milestone::find($id);
        $milestone->job_id = request('job_id');
        $milestone->name = request('name');
        $milestone->description = request('description');
        $milestone->budget = request('budget');
        $milestone->expected_by = request('expected_by');
        $milestone->filename = request('filename');
        $milestone->file_path = request('file_path');
        $milestone->save();

        return redirect()->route('milestones.index');
    }

    public function destroy($id)
    {
        $milestone = Milestone::find($id);
        $milestone->delete();
        return redirect()->route('milestones.index');
    }
}
