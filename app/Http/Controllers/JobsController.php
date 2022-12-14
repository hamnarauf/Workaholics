<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('jobs.index');
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        return redirect()->route('jobs.index');
    }

    public function show($id)
    {
        return view('jobs.show');
    }

    public function edit($id)
    {
        return view('jobs.edit');
    }

    public function update($id)
    {
        return redirect()->route('jobs.index');
    }

    public function destroy($id)
    {
        return redirect()->route('jobs.index');
    }
}
