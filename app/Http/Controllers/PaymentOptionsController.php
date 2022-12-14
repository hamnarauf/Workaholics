<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentOptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('payment_options.index');
    }

    public function create()
    {
        return view('payment_options.create');
    }

    public function store()
    {
        return redirect()->route('payment_options.index');
    }

    public function show($id)
    {
        return view('payment_options.show');
    }

    public function edit($id)
    {
        return view('payment_options.edit');
    }

    public function update($id)
    {
        return redirect()->route('payment_options.index');
    }

    public function destroy($id)
    {
        return redirect()->route('payment_options.index');
    }


}
