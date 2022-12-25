<?php

namespace App\Http\Controllers;

use App\Models\Gigproposal;
use App\Models\Gig;
use App\Models\User;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\identicalTo;
use function Termwind\render;

use Illuminate\Http\Request;

class GigproposalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $proposals = Gigproposal::all()->where('gig_id', $id)->whereIn('status', ['Pending', 'Accepted']);
        foreach ($proposals as $proposal) {
            $proposal->user = User::find($proposal->created_by);
        }

        return view('gigproposal.index', ["proposals" => $proposals]);
    }

    public function create()
    {
        $id = request('id');
        return view('gigproposal.create', ['id' => $id]);
    }

    public function store()
    {
        $proposal = new Gigproposal();
        $proposal->gig_id = request('project_id');
        $proposal->proposal = request('proposal');
        $proposal->deadline = request('expected_by');
        $proposal->bid = request('bid');
        $proposal->created_by = Auth::id();

        $file=request('file');
        
        if ($file != null){
            $filename=time().'.'.$file->getClientOriginalExtension();
            request('file')->move('gigproposalfiles',$filename);
            $proposal->file=$filename;
        }
        
        $proposal->save();
        return redirect('/gigs/' . request('project_id'));
    }

    public function show($proposal_id)
    {
        $proposal = Gigproposal::find($proposal_id);
        $project_name = Gig::find($proposal['gig_id'])->name;
        $freelancer = User::find($proposal['created_by']);
        $freelancer = $freelancer['name'];
        return view('gigproposal.show', ['project_name' => $project_name, 'proposal' => $proposal, 'freelancer' => $freelancer]);
    }

    public function edit($id)
    {
        $proposal =   GigProposal::find($id);
        return view('gigproposal.edit', ['proposal' => $proposal]);
    }

    public function update()
    {
        $id = request('id');
        $status = request('status');
        
        if ($status == 'view') {
            $route = 'gigproposals/' . $id . '/details';
            return redirect($route);
        } else {
            $proposal = GigProposal::find($id);
            $proposal->status = $status;
            $route = 'gigproposals/' . $id;
            $proposal->save();
            if ($status == 'Accepted') {
                $job = new Job();
                $job->gig_id = $proposal->gig_id;
                $job->employer = $proposal->created_by;
                $job->employee = User::find(Gig::find($proposal->gig_id)->created_by)->id;
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
        $proposal = GigProposal::find($id);
        $proposal->delete();
        return redirect()->route('proposals.index');
    }
}
