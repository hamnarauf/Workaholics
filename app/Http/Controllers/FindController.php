<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Gig;

class FindController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function index()
    {
        $projects = Project::join('categories', 'categories.id', '=', 'projects.category')
            ->join('users', 'users.id', '=', 'created_by')
            ->select('projects.*', 'categories.name as c_name', 'users.name as u_name')->get();


        $gigs = Gig::join('categories', 'categories.id', '=', 'gigs.category')
            ->join('users', 'created_by', '=', 'users.id')
            ->select('gigs.*', 'categories.name as c_name', 'users.name as u_name')->get();
        return view('find.index', ["projects" => $projects, "gigs" => $gigs]);
    }
    public function show()
    {
        $id = request('id');
        $projects = Project::join('categories', 'categories.id', '=', 'projects.category')
            ->join('users', 'users.id', '=', 'created_by')
            ->select('projects.*', 'categories.name as c_name', 'users.name as u_name')->get()->where('category', $id);


        $gigs = Gig::join('categories', 'categories.id', '=', 'gigs.category')
            ->join('users', 'created_by', '=', 'users.id')
            ->select('gigs.*', 'categories.name as c_name', 'users.name as u_name')->get()->where('category', $id);
        return view('find.index', ["projects" => $projects, "gigs" => $gigs]);
    }
}
