<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function index()
    {
        // Retrieve withdrawal transactions for the current user
        $withdrawals = Transaction::where('user_id', auth()->user()->id)
                                   ->where('amount', '<', 0)
                                   ->get();
        
        // Calculate total withdrawn amount
        $total = $withdrawals->sum('amount');
        
        // Return the view with withdrawal transactions data
        return view('withdrawals', ['withdrawals' => $withdrawals, 'total' => abs($total)]);
    }
}
