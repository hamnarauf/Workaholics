<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Project;
use App\Models\Job;
use App\Models\Education;
use App\Models\Employment;
use App\Models\Gig;
use App\Models\Milestone;
use App\Models\wTransactions;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        # Overall Statistics
        $user = User::all()->count();
        $project = Project::all()->count();
        $gig = Gig::all()->count();
        $completed_job = Job::where('status', '=', 'Completed')->count();
        $total_jobs = Job::all()->count();
        $jobs_in_progress = Job::where('status', '=', 'In Progress')->count();

        $progPercentage = ($jobs_in_progress / $total_jobs) * 100;
        $compPercentage = ($completed_job / $total_jobs) * 100;

        # Monthly Statistics 
        $date = Carbon::now()->subMonth();
        $user_m = User::where('created_at', '>', $date)->count();
        $project_m = Project::where('created_at', '>', $date)->count();
        $gig_m = Project::where('created_at', '>', $date)->count();
        $completed_job_m = Project::where('created_at', '>', $date)->count();

        return view('admin.index', ["user"=>$user, "proj"=>$project, "gig"=>$gig, "cJobs"=>$completed_job,
            "userM"=>$user_m, "projM"=>$project_m, "gigM"=>$gig_m, "cJobsM"=>$completed_job_m, 
            "totalJobs"=>$total_jobs, "jobsProgress"=> $progPercentage, "compJobs"=>$compPercentage]);
    }

    public function transactions()
    {
        return view('admin.transactions');
    }

    public function projects()
    {
        $projs = Project::leftjoin('users', 'projects.created_by', '=', 'users.id')
            ->leftjoin('categories', 'projects.category', '=', 'categories.id')
            ->select('projects.*', 'users.name as uname', 'users.img', 'categories.name as category')->get();
        
        return view('admin.projects', ["projs"=>$projs]);
    }

    public function gigs()
    {
        $gigs = Gig::leftjoin('users', 'gigs.created_by', '=', 'users.id')
            ->leftjoin('categories', 'gigs.category', '=', 'categories.id')
            ->select('gigs.*', 'users.name as uname', 'users.img', 'categories.name as category')->get();
        
        return view('admin.gigs', ["gigs"=>$gigs]);
    }

    public function jobs()
    {
        $jobs = Job::all();
        return view('admin.jobs', ["jobs"=>$jobs]);
    }


    # find a particular category
    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show', ["category" => $category]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', ["category" => $category]);
    }

    public function update($id)
    {
        $category = Category::find($id);
        $category->name = request('name');
        $category->save();
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }

    public function delete_project($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('admin/projects');
    }

    public function delete_gig($id)
    {
        $gig = Gig::find($id);
        $gig->delete();
        return redirect('admin/gigs');
    }

    public function delete_job($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect('admin/jobs');
    }
}
