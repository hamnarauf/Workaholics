<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('feedbacks.index');
    }
    public function create()
    {
        return view('feedbacks.create');
    }
    public function store()
    {
        return redirect()->route('feedbacks.index');
    }
    public function show($id)
    {
        return view('feedbacks.show');
    }
    public function edit($id)
    {
        return view('feedbacks.edit');
    }
    public function update($id)
    {
        return redirect()->route('feedbacks.index');
    }
    public function destroy($id)
    {
        return redirect()->route('feedbacks.index');
    }
}
