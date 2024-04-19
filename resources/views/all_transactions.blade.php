<!-- resources/views/all_transactions.blade.php -->
@extends('layout')

@section('title', 'All Transactions')

@section('content')
    <h1 class="mb-4">All Transactions</h1>
    <h6><a href="{{ route('home') }}">Back to Home Page</a></h6>
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Amount</th>
                <th>Transaction Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->created_at }}</td>
                    <td>{{ abs($transaction->amount) }}</td>
                    <td>{{ $transaction->amount < 0 ? 'Debit' : 'Credit' }}</td>
                    <td>{{ $transaction->transaction_type }} {{ $transaction->transaction_description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
