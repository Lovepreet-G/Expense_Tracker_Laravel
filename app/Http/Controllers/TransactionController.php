<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all transactions from the database
        $transactions = Transaction::where('user_id', auth()->user()->id)->get();
        
        // Pass the transactions data to the view
        return view('all_transactions', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_transaction');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'transaction_type' => 'required|string',
            'description' => 'required|string',
        ]);

        // Create a new transaction
        Transaction::create([
            'created_at' => $validatedData['date'],
            'amount' => $validatedData['amount'],
            'transaction_type' => $validatedData['transaction_type'],
            'transaction_description' => $validatedData['description'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('add_transaction')->with('success', 'Transaction added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
