<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GigsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('gigs.index');
    }
    public function create()
    {
        return view('gigs.create');
    }
    public function store()
    {
        return redirect()->route('gigs.index');
    }
    public function show($id)
    {
        return view('gigs.show');
    }
    public function edit($id)
    {
        return view('gigs.edit');
    }
    public function update($id)
    {
        return redirect()->route('gigs.index');
    }
    public function destroy($id)
    {
        return redirect()->route('gigs.index');
    }
    

}
