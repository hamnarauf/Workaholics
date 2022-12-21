<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use App\Models\Project;

class findsController extends Controller
{
    public function index()
    {
        $gigs = Gig::all();
        $projects = Project::all();
        return view('find.index', ["gigs" => $gigs, "projects" => $projects]);
    }

    public function show()
    {
        $id = request('id');
        $gigs = Gig::all()->where('category', $id);
        $projects = Project::all()->where('category', $id);
        return view('find.index', ["gigs" => $gigs, "projects" => $projects]);
    }
}
