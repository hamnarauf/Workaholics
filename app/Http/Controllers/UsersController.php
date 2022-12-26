<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Job;
use App\Models\Education;
use App\Models\Employment;
use App\Models\Gig;
use App\Models\Category;
use App\Models\Milestone;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_skills() {
        $user = User::find(Auth::id());

        $skills = '';
        if ($user->skills == null) {
            $skills = 'No skills';
        } else {
            foreach ($user->skills as $skill) {
                $skills = $skills . $skill . ',';  # code...
            }

            $skills  = rtrim($skills, ',');
        }
        
        return $skills;
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->img = 'user/default.png';
        $user->remember_token = request('remember_token');
        $user->city = request('city');
        $user->town = request('town');
        $user->zip = request('zip');
        $user->state = request('state');
        $user->country = request('country');
        $user->wallet = request('wallet');
        $user->skills = request('skills');
        $user->company = request('company');
        $user->mobileNo = request('mobileNo');
        $user->save();

        return redirect('users.index');
    }

    public function show($id)
    {
        $user = User::find(Auth::id());
        $projects_posted = Project::where('created_by', '=', Auth::id())->get()->count();
        $job_count = Job::where('employee', '=', Auth::id())->count();
        $job_details = ['projectsPosted' => $projects_posted, 'jobCount' => $job_count];
        
        $gigs = Gig::leftjoin('categories', 'gigs.category', '=', 'categories.id')
                    ->where('created_by', '=', Auth::id())
                    ->select('gigs.*', 'categories.name as c_name')->get();
        
        $projs = Project::leftjoin('categories', 'projects.category', '=', 'categories.id')
                    ->where('created_by', '=', Auth::id())
                    ->select('projects.*', 'categories.name as c_name')->get();

        $education = Education::where('user', '=', Auth::id())->get();
        $employment = Employment::where('user', '=', Auth::id())->get();

        $work_history = Job::leftjoin('projects', 'jobs.project_id', '=', 'projects.id')
                        ->leftjoin('gigs', 'jobs.gig_id', '=', 'gigs.id')
                        ->leftjoin('users', 'jobs.employer', '=', 'users.id')
                        ->where('employee', '=', Auth::id())
                        ->select('jobs.*', 'users.name as u_name', 'users.img as u_img', 
                                'projects.name as p_name', 'gigs.name as g_name', 
                                'projects.skills as p_skills', 'gigs.skills as g_skills',
                                'projects.description as p_des', 'gigs.description as g_des')->get();
        
        $pricings = array();
        $deadlines = array();

        foreach ($work_history as $w){
            # calculate total price of a job
            $price = Milestone::where('job_id', '=', $w['id'])
                            ->where('approved_by_employer', '=', '1')
                            ->where('approved_by_employee', '=', '1')
                            ->sum('budget');
            array_push($pricings, $price);

            # calculate the deadline of the project
            $deadline = Milestone::where('job_id', '=', $w['id'])
                            ->where('approved_by_employer', '=', '1')
                            ->where('approved_by_employee', '=', '1')
                            ->max('expected_by');
            array_push($deadlines, $deadline);
        }
    
        return view('users.show', 
            ['user' => $user, 
            "jobDetails" => $job_details, 
            "education" => $education , 
            "employment" => $employment, 
            "gigs" => $gigs, 
            "projs" => $projs,
            "workHistory" => $work_history,
            "pricings" => $pricings,
            "deadlines" => $deadlines,
            ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $skills = UsersController::get_skills();
        return view('users.edit', ['user' => $user, 'skills' => $skills]);
    }

    public function update()
    {
        $id = Auth::id();
        $user = User::find($id);
        $user->name = request('name');
        $user->street_address = request('street_address');
        $user->zip = request('zip');
        $user->state = request('state');
        $user->country = request('country');
        $skills = request('skills');
        $user->skills = explode(',', $skills);
        $user->company = request('company');
        $user->mobileNo = request('mobileNo');
        $user->save();
        $route = '/users/' . $id;
        return redirect($route);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    public function education(){
        return view('users.education.index');
    }
    public function employment(){
        return view('users.employment.index');
    }
    
    public function update_education() {
        $edu = new Education();
        $edu->user = Auth::id();
        $edu->institute = request('institute');
        $edu->title = request('title');
        $edu->date_of_graduation = request('date');
        $edu->city = request('city');
        $edu->country = request('country');

        $edu->save();
        return redirect('users/{{Auth::id()}}/edit');
    }
}
