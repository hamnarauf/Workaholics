<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\Project;
use App\Models\User;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\identicalTo;
use function Termwind\render;

class ProposalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $proposals = Proposal::all()->where('project_id', $id)->whereIn('status', ['Pending', 'Accepted']);
        foreach ($proposals as $proposal) {
            $proposal->user = User::find($proposal->created_by);
        }

        return view('proposals.index', ["proposals" => $proposals]);
    }

    public function create()
    {
        $id = request('id');
        return view('proposals.create', ['id' => $id]);
    }

    public function store()
    {
        $proposal = new Proposal();
        $proposal->project_id = request('project_id');
        $proposal->proposal = request('proposal');
        $proposal->expected_by = request('expected_by');
        $proposal->bid = request('bid');
        $proposal->created_by = Auth::id();
        
        $file=request('file');

        if ($file != null){
            $filename=time().'.'.$file->getClientOriginalExtension();
            request('file')->move('proposalfiles',$filename);
            $proposal->file=$filename;
    
        }
                
        $proposal->save();
        $route = '/projects/' . request('project_id');
        return redirect($route);
    }

    public function show($proposal_id)
    {
        $proposal = Proposal::find($proposal_id);
        $project_name = Project::find($proposal['project_id'])->name;
        $freelancer = User::find($proposal['created_by']);
        $freelancer = $freelancer['name'];
        return view('proposals.show', ['project_name' => $project_name, 'proposal' => $proposal, 'freelancer' => $freelancer]);
    }

    public function edit($id)
    {
        $proposal =   Proposal::find($id);
        return view('proposals.edit', ['proposal' => $proposal]);
    }

    public function update()
    {
        $id = request('id');
        $status = request('status');
        if ($status == 'view') {
            $route = 'proposals/' . $id . '/details';
            return redirect($route);
        } else {
            $proposal = Proposal::find($id);
            $proposal->status = $status;
            $route = 'proposals/' . $id;
            $proposal->save();
            if ($status == 'Accepted') {
                $job = new Job();
                $job->project_id = $proposal->project_id;
                $job->employer = User::find(Project::find($proposal->project_id)->created_by)->id;
                $job->employee = $proposal->created_by;
                $job->save();
            }
            return redirect($route);
        }
    }
    public function download(Request $req, $file)
    {
        return response()->download(public_path('file/'.$file));
    }

    public function destroy($id)
    {
        $proposal = Proposal::find($id);
        $proposal->delete();
        return redirect()->route('proposals.index');
    }
}
