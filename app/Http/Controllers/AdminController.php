<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Project;
use App\Models\Job;
use App\Models\Education;
use App\Models\Employment;
use App\Models\Gig;
use App\Models\Milestone;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    # display all categories
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ["categories" => $categories]);
    }

    public function create()
    {
        return view('category.create');
    }

    # create new category
    public function store()
    {
        $category = new Category();
        $category->name = request('name');
        $category->save();
        return redirect()->route('category.index');
    }

    # find a particular category
    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show', ["category" => $category]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', ["category" => $category]);
    }

    public function update($id)
    {
        $category = Category::find($id);
        $category->name = request('name');
        $category->save();
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
