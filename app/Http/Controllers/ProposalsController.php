<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use Illuminate\Support\Facades\Auth;

class ProposalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proposals = Proposal::all();
        return view('proposals.index', ["proposals" => $proposals]);
    }
    
    public function create()
    {
        return view('proposals.create');
    }
    
    public function store()
    {
        $proposal = new Proposal();
        $proposal->project_id = request('project_id');
        $proposal->proposal = request('proposal');
        $proposal->expected_by = request('expected_by');
        $proposal->bid = request('bid');
        $proposal->created_by = Auth::id();
        $proposal->save();
        return redirect()->route('proposals.index');
    }
    
    public function show($id)
    {
        $proposal = Proposal::find($id);
        return view('proposals.show', ['proposal' => $proposal]);
    }
    
    public function edit($id)
    {
        $proposal =   Proposal::find($id);
        return view('proposals.edit', ['proposal' => $proposal]);
    }
    
    public function update($id)
    {
        $proposal = Proposal::find($id);
        $proposal->project_id = request('project_id');
        $proposal->proposal = request('proposal');
        $proposal->expected_by = request('expected_by');
        $proposal->bid = request('bid');
        $proposal->created_by = Auth::id();
        $proposal->save();

        return redirect()->route('proposals.index');
    }
    
    public function destroy($id)
    {
        $proposal = Proposal::find($id);
        $proposal->delete();
        return redirect()->route('proposals.index');
    }
}
