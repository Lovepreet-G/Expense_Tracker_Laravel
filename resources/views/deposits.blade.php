<!-- resources/views/deposits.blade.php -->
@extends('layout')

@section('title', 'All Deposits')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">All Deposits</h1>
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
                @foreach($deposits as $deposit)
                    <tr>
                        <td>{{ $deposit->created_at }}</td>
                        <td>{{ abs($deposit->amount) }}</td>
                        <td>Credit</td>
                        <td>{{ $deposit->transaction_type }} {{ $deposit->transaction_description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
