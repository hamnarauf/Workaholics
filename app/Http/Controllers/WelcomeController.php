<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function __construct()
    {
        # $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();
        $user = User::find(Auth::id());
        return view('welcome', ['categories'=>$categories, 'user'=>$user]);

    }

    public function create()
    {
    }

    public function store()
    {}

    public function show($id)
    {}

    public function edit($id)
    {}

    public function update()
    {}

    public function destroy($id)
    {}
}
