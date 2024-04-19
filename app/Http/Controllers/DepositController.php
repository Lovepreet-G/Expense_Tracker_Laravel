<?php

namespace App\Http\Controllers;
use App\Models\Transaction;


use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index()
    {
        // Retrieve deposit transactions for the current user
        $deposits = Transaction::where('user_id', auth()->user()->id)
                               ->where('amount', '>', 0)
                               ->get();
        
        // Return the view with deposit transactions data
        return view('deposits', ['deposits' => $deposits]);
    }
}
