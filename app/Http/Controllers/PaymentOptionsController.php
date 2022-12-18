<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentOption;

class PaymentOptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $payment_options = PaymentOption::all();
        return view('payment_options.index', ["payment_options" => $payment_options]);
    }

    public function create()
    {
        return view('payment_options.create');
    }

    public function store()
    {
        $payment_option = new PaymentOption();
        $payment_option->user_id = request('user_id');
        $payment_option->type = request('type');
        $payment_option->account_name = request('account_name');
        $payment_option->account_number = request('account_number');
        $payment_option->save();
        return redirect()->route('payment_options.index');
    }

    public function show($id)
    {
        $payment_option = PaymentOption::find($id);
        return view('payment_options.show', ['payment_option' => $payment_option]);
    }

    public function edit($id)
    {
        $payment_option = PaymentOption::find($id);
        return view('payment_options.edit', ['payment_option' => $payment_option]);
    }

    public function update($id)
    {
        $payment_option = PaymentOption::find($id);
        $payment_option->user_id = request('user_id');
        $payment_option->type = request('type');
        $payment_option->account_name = request('account_name');
        $payment_option->account_number = request('account_number');
        $payment_option->save();
        return redirect()->route('payment_options.index');
    }

    public function destroy($id)
    {
        $payment_option = PaymentOption::find($id);
        $payment_option->delete();
        return redirect()->route('payment_options.index');
    }
}
