<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Job;
use App\Models\Education;
use App\Models\Employment;
use Illuminate\Support\Facades\Auth;

class EmploymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

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
