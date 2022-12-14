<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('projects.index');
    }
    public function create()
    {
        return view('projects.create');
    }
    public function store()
    {
        return redirect()->route('projects.index');
    }
    public function show($id)
    {
        return view('projects.show');
    }
    public function edit($id)
    {
        return view('projects.edit');
    }
    public function update($id)
    {
        return redirect()->route('projects.index');
    }
    public function destroy($id)
    {
        return redirect()->route('projects.index');
    }
    
}
