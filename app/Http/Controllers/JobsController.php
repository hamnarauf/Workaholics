<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Project;
use App\Models\User;
use App\Models\Gig;
use App\Models\Category;
use App\Model\Milestone;
use App\Models\Milestone as ModelsMilestone;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function index()
    {
        $buyers = Job::all()->where('employer', auth()->user()->id);
        foreach ($buyers as $buyer) {
            if (is_null($buyer->project_id)) {
                $buyer->project = Gig::find($buyer->gig_id);
                $buyer->project->expected_by = $buyer->project->deadline;
            } else {
                $buyer->project = Project::find($buyer->project_id);
            }
            $buyer->employeed = User::find($buyer->employee);
            $buyer->status = ModelsMilestone::all()->where('job_id', $buyer->id)->where('status', '!=', 'completed')->count();
            $buyer->status = $buyer->status == 0 ? 'Completed' : 'In progress';
            $buyer->milestonescount = ModelsMilestone::all()->where('job_id', $buyer->id)->count();
            if ($buyer->milestonescount == 0) {
                $buyer->status = 'Not started';
            }
        }
        $sellers = Job::all()->where('employee', auth()->user()->id);
        foreach ($sellers as $seller) {
            if (is_null($seller->project_id)) {
                $seller->project = Gig::find($seller->gig_id);
                $seller->project->expected_by = $seller->project->deadline;
            } else {
                $seller->project = Project::find($seller->project_id);
            }
            $seller->employerd = User::find($seller->employer);
            $seller->status = ModelsMilestone::all()->where('job_id', $seller->id)->where('status', '!=', 'completed')->count();
            $seller->status = $seller->status == 0 ? 'Completed' : 'In progress';
            $seller->milestonescount = ModelsMilestone::all()->where('job_id', $seller->id)->count();
            if ($seller->milestonescount == 0) {
                $seller->status = 'Not started';
            }
        }
        // return $buyers;
        return view('jobs.index', ["buyers" => $buyers, "sellers" => $sellers]);
    }

    public function create()
    {
        $job = new Job();
        
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

    public function submissions($id)
    {
        return view('jobs.viewSubmission');
    }
}
