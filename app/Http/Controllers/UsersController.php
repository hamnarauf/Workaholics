<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->remember_token = request('remember_token');
        $user->city = request('city');
        $user->town = request('town');
        $user->zip = request('zip');
        $user->state = request('state');
        $user->country = request('country');
        $user->wallet = request('wallet');
        $user->skills = request('skills');
        $user->company = request('company');
        $user->mobileNo = request('mobileNo');
        $user->save();

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->name = request('name');
        $user->street_address = request('street_address');
        $user->zip = request('zip');
        $user->state = request('state');
        $user->country = request('country');
        $user->skills = request('skills');
        $user->company = request('company');
        $user->mobileNo = request('mobileNo');
        $user->save();
        return redirect('users/{$id}');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
