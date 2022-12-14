<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        return view('users.show');
    }

    public function edit($id)
    {
        return view('users.edit');
    }

    public function update($id)
    {
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        return redirect()->route('users.index');
    }
}
