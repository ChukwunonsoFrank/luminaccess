<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Transfer;

class TransactionsController extends Controller
{
    public function index() {
        $deposits = Deposit::where('user_id', auth()->user()->id)->get();
        $transfers = Transfer::where('user_id', auth()->user()->id)->get();
        return view('transaction.index', [
            'deposits' => $deposits,
            'transfers' => $transfers,
        ]);
    }
}
