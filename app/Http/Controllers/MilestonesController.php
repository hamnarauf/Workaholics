<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Milestone;

class MilestonesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $milestones = Milestone::all();
        return view('milestones.index', ["milestones" => $milestones]);
    }

    public function create()
    {
        return view('milestones.create');
    }

    public function store()
    {
        $milestone = new Milestone();
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

    public function show($id)
    {
        $milestone = Milestone::find($id);
        return view('milestones.show', ['milestone' => $milestone]);
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
