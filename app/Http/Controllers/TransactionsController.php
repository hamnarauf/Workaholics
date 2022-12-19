<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\User;

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
        $transaction->user_id = Auth::id();
        $transaction->account_name = request('account_name');
        $transaction->account_number = request('account_number');
        $transaction->amount = request('amount');

        $user = User::find(Auth::id());
        $user->wallet = $user->wallet + $transaction->amount; 

        $transaction->save();
        $user->save();

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
        $transaction->type = request('type');
        $transaction->account_name = request('account_name');
        $transaction->account_number = request('account_number');
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
