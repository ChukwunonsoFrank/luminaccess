<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transfer;
use App\Mail\SendOTPToken;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\AdminNotification;
use App\Mail\TransferInitiated;
use Illuminate\Support\Facades\Mail;

class LocalTransferController extends Controller
{
    public function create()
    {
        return view('local-transfer.create');
    }

    public function view_otp() {
        return view('local-transfer.otp');
    }

    public function otp(Request $request) {
        $amount = $request->amount;
        
        if(auth()->user()->balance === 0) {
            return back()->with('message', 'Insufficient balance. Please deposit to make a transfer.');
        }
        
        if($amount > (auth()->user()->balance / 100)) {
            return back()->with('message', 'Insufficient balance. Please deposit to make a transfer.');
        }
        
        $account_number = $request->account_number;
        $receipient_name = $request->receipient_name;
        $receipient_bank = $request->receipient_bank;

        $generated_otp_token = strval(rand(100000, 999999));

        User::where('id', auth()->user()-> id)->update([
            'otp_token' => $generated_otp_token,
        ]);

        Mail::to(auth()->user()->email)->send(new SendOTPToken(auth()->user()->fullname, $generated_otp_token));

        return view('local-transfer.otp', [
            'amount' => $amount,
            'account_number' => $account_number,
            'receipient_name' => $receipient_name,
            'receipient_bank' => $receipient_bank,
        ]);
    }

    public function store(Request $request)
    {
        $amount = intval($request->amount);
        $account_number = $request->account_number;
        $receipient_name = $request->receipient_name;
        $receipient_bank = $request->receipient_bank;
        $otp_token = $request->otp_token;

        $user_otp_token = User::where('id', auth()->user()->id)->value('otp_token');

        if ($otp_token != $user_otp_token) {
            return back()->with('message', 'Invalid OTP Token. Please check your token and try again.');
        }

        $transfer = Transfer::create([
            'user_id' => auth()->user()->id,
            'hash' => Str::ulid(),
            'transaction_type' => 'Transfer',
            'transfer_type' => 'Local',
            'account_number' => $account_number,
            'receipient_name' => $receipient_name,
            'receipient_bank' => $receipient_bank,
            'amount' => $amount * 100,
            'description' => 'Local transfer of $' . strval($amount),
            'status' => 'pending'
        ]);

        Mail::to(auth()->user()->email)->send(new TransferInitiated(auth()->user()->fullname, $transfer->hash, $transfer->amount, $transfer->transfer_type, $transfer->account_number, $transfer->receipient_name, $transfer->receipient_bank, $transfer->description, $transfer->status));

        Mail::to('info@kinetixfinance.com')->send(new AdminNotification(auth()->user()->fullname, $transfer->amount, 'Transfer', $transfer->hash));

        return redirect('/local-transfer')->with('message', 'Transfer initiated successfully. You will receive an email when your transfer has been confirmed.');
    }
}
