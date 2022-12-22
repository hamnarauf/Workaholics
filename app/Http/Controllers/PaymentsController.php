<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\wTransactions;
use App\Models\User;
use App\Models\Job;

class PaymentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        
        
        $user = User::find(Auth::id());
        

        $send_wallet_to_wallet = wTransactions::where('sender_id', '=', Auth::id())->get();
        $receive_from_wallet_to_wallet = wTransactions::where('receiver_id', '=', Auth::id())->get();
        
        $bank_to_wallet = Transaction::where('user_id', '=', Auth::id())->where('amount', '>', 0)->get();
        $wallet_to_bank = Transaction::where('user_id', '=', Auth::id())->where('amount', '<', 0)->get();

        return view('payments.index', ["user" => $user, "sendWTW" => $send_wallet_to_wallet, "receiveWTW" => $receive_from_wallet_to_wallet, "bank_to_wallet" => $bank_to_wallet, "wallet_to_bank" => $wallet_to_bank]);
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
        $user = User::find(Auth::id());
        
        $created_jobs = Job::where('employer', '=', Auth::id());
        
        
        $hired_on_jobs = Job::where('employee', '=', Auth::id());


        $transaction = Transaction::find($id);
        return view('payments.show', ['user' => $user]);
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
