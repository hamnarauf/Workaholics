<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', ["transactions" => $transactions]);
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store()
    {
        $transaction = new Transaction();
        $transaction->milestone_id = request('milestone_id');
        $transaction->sender_id = request('sender_id');
        $transaction->receiver_id = request('receiver_id');
        $transaction->amount = request('amount');
        $transaction->save();
        return redirect()->route('transactions.index');
    }

    public function show($id)
    {
        $transaction = Transaction::find($id);
        return view('transactions.show', ['transaction' => $transaction]);
    }

    public function edit($id)
    {
        $transaction = Transaction::find($id);
        return view('transactions.edit', ['transaction' => $transaction]);
    }

    public function update($id)
    {
        $transaction = Transaction::find($id);
        $transaction->milestone_id = request('milestone_id');
        $transaction->sender_id = request('sender_id');
        $transaction->receiver_id = request('receiver_id');
        $transaction->amount = request('amount');
        $transaction->save();
        return redirect()->route('transactions.index');
    }

    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        return redirect()->route('transactions.index');
    }
}
