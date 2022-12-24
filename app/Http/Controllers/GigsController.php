<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use App\Models\User;
use App\Models\job;
use App\Models\Category;
use App\Models\GigProposal;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\registerArgumentsSet;
use function Termwind\render;

class GigsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $gigs = Gig::all();
        return view('Gigs.index', ["gigs" => $gigs]);
    }
    public function create()
    {
        $id = request('id');
        $categories = Category::all();
        return view('Gigs.create', ["categories" => $categories, "id" => $id]);
    }
    public function store()
    {
        $gig = new Gig();
        $gig->name = request('name');
        $gig->description = request('description');
        $gig->budget = request('budget');
        $gig->required_days = request('required_days');

        $skill_string = request('skills');
        $gig->skills = explode(',', $skill_string);

        $gig->created_by = Auth::id();
        $gig->category = request('category');
        $gig->save();
        return redirect('/finds');
    }

    public function show($id)
    {
        $gig = Gig::find($id);
        $user = User::find($gig->created_by);
        $jobcount = Job::where('employee', $user->id)->count() + 1;
        $category = Category::find($gig->category);
        $submit = GigProposal::where('gig_id', $id)->where('created_by', Auth::id())->count();
        if ($user == Auth::user()) {
            $route = '/gigproposals/' . $id;
            return redirect($route);
        } else {
            return view('gigs.show', ["gig" => $gig, "user" => $user, "jobcount" => $jobcount, "category" => $category, "submit" => $submit]);
        }
    }

    public function edit($id)
    {
        $gig = Gig::find($id);
        return view('gigs.edit', ['gigs' => $gig]);
    }

    public function update($id)
    {
        $gig = Gig::find($id);
        $gig->name = request('name');
        $gig->description = request('description');
        $gig->category = request('category');
        $gig->budget = request('budget');
        $gig->required_days = request('required_days');

        $skill_string = request('skills');
        $gig->skills = explode(',', $skill_string);

        $gig->created_by = Auth::id();
        $gig->category = request('category');

        $gig->save();
        return redirect()->route('gigs.index');
    }

    public function destroy($id)
    {
        $gig = Gig::find($id);
        $gig->delete();
        return redirect()->route('gigs.index');
    }
}
