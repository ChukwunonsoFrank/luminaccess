<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    public function edit(Request $request)
    {
        $user_id = $request->id;
        $user = User::where('id', $user_id)->first();
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }
    
    public function delete(Request $request)
    {
        $user_id = $request->id;
        User::destroy($user_id);
        $users = User::all();
        return view('admin.user.index', [
            'users' => $users
        ]);
    }
    
    public function suspend(Request $request)
    {
        $user_id = $request->id;
        $user = User::find($user_id);
        $user->restricted = !$user->restricted;
        $user->save();

        $users = User::all();
        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        $user_id = $request->id;
        User::where('id', $user_id)->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'address' => $request->address,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'marital_status' => $request->marital_status,
            'account_type' => $request->account_type,
            'country' => $request->country,
            'phone' => $request->phone,
            'balance' => $request->balance * 100,
            'total_deposited' => $request->total_deposited * 100,
            'total_withdrawn' => $request->total_withdrawn * 100
        ]);
        $user = User::where('id', $user_id)->first();
        return view('admin.user.edit', ['user' => $user]);
    }

    public function create_debit_or_credit(Request $request)
    {
        $user_id = $request->id;
        return view('admin.user.debit-or-credit', ['user_id' => $user_id]);
    }
    
    public function store_debit_or_credit(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::find($user_id);
        
        $amount = $request->amount;
        $transaction_type = $request->transaction_type;

        if ($transaction_type === "credit") {
            $new_user_balance = ($user->balance / 100) + $amount;
            $user->balance = ($new_user_balance * 100);
            $new_total_deposited = ($user->total_deposited / 100) + $amount;
            $user->total_deposited = ($new_total_deposited * 100);
            $user->save();
            session()->flash('message', 'Amount added to user balance successfully!');
            return view('admin.user.debit-or-credit', ['user_id' => $user_id]);
        }

        if ($transaction_type === "debit") {
            $new_user_balance = ($user->balance / 100) - $amount;
            $user->balance = ($new_user_balance * 100);
            $new_total_withdrawn = ($user->total_withdrawn / 100) + $amount;
            $user->total_withdrawn = ($new_total_withdrawn * 100);
            $user->save();
            session()->flash('message', 'Amount debited from user balance successfully!');
            return view('admin.user.debit-or-credit', ['user_id' => $user_id]);
        }

    }
}
