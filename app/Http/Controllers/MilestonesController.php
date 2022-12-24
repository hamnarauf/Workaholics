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

    public function index($id)
    {
        //All milestones to be displayed on the index page
        $job = Job::find($id);
        if (auth()->id() == $job->employer) {
            $approved_milestones = Milestone::all()->where('job_id', $id)->where('approved_by_employer', 1);
            $unapproved_milestones = Milestone::all()->where('job_id', $id)->where('approved_by_employer', 0);
            return view('milestones.index', ["job_id" => $id, "approved_milestones" => $approved_milestones, "unapproved_milestones" => $unapproved_milestones, "role" => "employer"]);
        } elseif (auth()->id() == $job->employee) {
            $approved_milestones = Milestone::all()->where('job_id', $id)->where('approved_by_employee', 1);
            $unapproved_milestones = Milestone::all()->where('job_id', $id)->where('approved_by_employee', 0);
            return view('milestones.index', ["job_id" => $id, "approved_milestones" => $approved_milestones, "unapproved_milestones" => $unapproved_milestones, "role" => "employee"]);
        } else {
            return redirect('/');
        }
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
        $milestone = Milestone::find($id);
        return view('milestones.show', ["id" => $id]);
    }

    public function edit($id)
    {
        $milestone = Milestone::find($id);
        return view('milestones.edit', ['milestone' => $milestone]);
    }

    public function update()
    {
        $id = request('id');
        $milestone = Milestone::find($id);
        $job = Job::find($milestone->job_id);
        $milestone->approved_by_employer = 1;
        $milestone->approved_by_employee = 1;

        if (request('action') == "Accept") {
            $milestone->status = "In Progress";
            //money transfer from employer account to escrow
        } elseif (request('action') == "Reject") {
            $milestone->status = "Cancelled";
        } elseif (request('action') == "Submit") {
            return redirect("/milestones/" . $id . "/details");
        } elseif (request('action') == "Paid") {
            //money transfer from escrow to employee account
        }
        $milestone->save();
        return redirect('/milestones/' . $milestone->job_id);
    }
    public function submit()
    {
        //file submission
        $id = request('id');
        $milestone = Milestone::find($id);
        $milestone->status = "Completed";
        $milestone->submission_msg = request('msg');
        $milestone->filename = request('fname');
        request('submission')->move('milestonefiles','fname');
        $milestone->save();
        return redirect('/milestones/' . $milestone->job_id);
    }

    public function destroy($id)
    {
        $milestone = Milestone::find($id);
        $milestone->delete();
        return redirect()->route('milestones.index');
    }
}
