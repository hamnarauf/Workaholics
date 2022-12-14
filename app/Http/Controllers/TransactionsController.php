<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('transactions.index');
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store()
    {
        return redirect()->route('transactions.index');
    }

    public function show($id)
    {
        return view('transactions.show');
    }

    public function edit($id)
    {
        return view('transactions.edit');
    }

    public function update($id)
    {
        return redirect()->route('transactions.index');
    }

    public function destroy($id)
    {
        return redirect()->route('transactions.index');
    }
}
