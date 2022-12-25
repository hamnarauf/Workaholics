<?php

namespace App\Http\Controllers;

use App\Models\Category;

class FeedbacksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // # display all categories
    // public function index()
    // {
    //     $categories = Category::all();
    //     return view('categories.index', ["categories" => $categories]);
    // }

    public function create()
    {
        return view('jobs.review.index');
    }

    # create new category
    public function store()
    {
        $review = new ();
        $category->name = request('name');
        $category->save();
        return redirect('/categories');
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
