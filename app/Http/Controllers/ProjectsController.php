<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\job;
use App\Models\Category;
use App\Models\Proposal;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', ["projects" => $projects]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('projects.create', ['categories' => $categories]);
    }
    public function store()
    {
        $project = new Project();
        $project->name = request('name');
        $project->description = request('description');
        $project->category = request('category');
        $project->budget = request('budget');
        $project->expected_by = request('expected_by');

        $skill_string = request('skills');
        $project->skills = explode(',', $skill_string);

        $project->created_by = Auth::id();
        $project->save();
        return redirect('/finds');
    }
    public function show($id)
    {
        $project = Project::find($id);
        $user = User::find($project->created_by);
        $jobcount = Job::where('employer', $user->id)->count() + 1;
        $category = Category::find($project->category);
        $submit = Proposal::where('project_id', $id)->where('created_by', Auth::id())->count();
        if ($user == Auth::user()) {
            $route = '/proposals/' . $id;
            return redirect($route);
        } else {
            return view('projects.show', ['project' => $project, 'user' => $user, 'jobcount' => $jobcount, 'category' => $category, 'submit' => $submit]);
        }
    }
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit', ['project' => $project]);
    }
    public function update($id)
    {
        $project = Project::find($id);
        $project->name = request('name');
        $project->description = request('description');
        $project->category = request('category');
        $project->budget = request('budget');
        $project->expected_by = request('expected_by');

        $skill_string = request('skills');
        $project->skills = explode(',', $skill_string);

        $project->created_by = request('created_by');
        $project->save();
        return redirect()->route('projects.index');
    }
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('projects.index');
    }
}
