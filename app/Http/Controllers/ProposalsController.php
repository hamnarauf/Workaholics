<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('proposals.index');
    }
    public function create()
    {
        return view('proposals.create');
    }
    public function store()
    {
        return redirect()->route('proposals.index');
    }
    public function show($id)
    {
        return view('proposals.show');
    }
    public function edit($id)
    {
        return view('proposals.edit');
    }
    public function update($id)
    {
        return redirect()->route('proposals.index');
    }
    public function destroy($id)
    {
        return redirect()->route('proposals.index');
    }
}
