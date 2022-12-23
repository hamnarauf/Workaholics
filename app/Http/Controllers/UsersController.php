<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Job;
use App\Models\Education;
use App\Models\Employment;
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
        $user = User::find($id);
        $projects_posted = Project::where('created_by', '=', Auth::id())->get()->count();
        $job_count = Job::where('employee', '=', Auth::id())->count();
        $job_details = ['projects_posted' => $projects_posted, 'job_count' => $job_count];

        $education = Education::where('user', '=', Auth::id());
        $employment = Employment::where('user', '=', Auth::id());

        return view('users.show', ['user' => $user, "job_details" => $job_details, "employment" => $employment]);
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
}
