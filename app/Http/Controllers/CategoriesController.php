<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    # display all categories
    public function index()
    {
        if (Auth::id() == '18'){
            return redirect('/admin');
        }

        $categories = Category::all();
        return view('categories.index', ["categories" => $categories]);
    }

    public function create()
    {
        if (Auth::id() != '18'){
            return redirect('/categories');
        }
        return view('categories.create');
    }

    # create new category
    public function store()
    {
        $category = new Category();
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
        if (Auth::id() != '18'){
            return redirect('/categories');
        }

        $category = Category::find($id);
        return view('category.edit', ["category" => $category]);
    }

    public function update($id)
    {
        if (Auth::id() != '18'){
            return redirect('/categories');
        }

        $category = Category::find($id);
        $category->name = request('name');
        $category->save();
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        if (Auth::id() != '18'){
            return redirect('/categories');
        }
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
