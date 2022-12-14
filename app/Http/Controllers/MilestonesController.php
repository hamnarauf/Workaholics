<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MilestonesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('milestones.index');
    }

    public function create()
    {
        return view('milestones.create');
    }

    public function store()
    {
        return redirect()->route('milestones.index');
    }

    public function show($id)
    {
        return view('milestones.show');
    }

    public function edit($id)
    {
        return view('milestones.edit');
    }

    public function update($id)
    {
        return redirect()->route('milestones.index');
    }

    public function destroy($id)
    {
        return redirect()->route('milestones.index');
    }
}
