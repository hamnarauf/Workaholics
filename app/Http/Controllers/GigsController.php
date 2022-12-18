<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;

class GigsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $gigs = Gig::all();
        return view('gigs.index', ["gigs" => $gigs]);
    }
    public function create()
    {
        return view('gigs.create');
    }
    public function store()
    {
        $gig = new Gig();
        $gig->name = request('name');
        $gig->description = request('description');
        $gig->category = request('category');
        $gig->budget = request('budget');
        $gig->required_days = request('required_days');
        $gig->skills = request('skills');
        $gig->created_by = request('created_by');
        $gig->save();
        return redirect()->route('gigs.index');
    }
    public function show($id)
    {
        $gig = Gig::find($id);
        return view('gigs.show', ["gig" => $gig]);
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
        $gig->skills = request('skills');
        $gig->created_by = request('created_by');
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
