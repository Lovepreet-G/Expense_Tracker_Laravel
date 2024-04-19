@extends('layout')

@section('title', 'All Withdrawals')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">All Withdrawals</h1>
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
                @foreach($withdrawals as $withdrawal)
                    <tr>
                        <td>{{ $withdrawal->created_at }}</td>
                        <td>{{ abs($withdrawal->amount) }}</td>
                        <td>Debit</td>
                        <td>{{ $withdrawal->transaction_type }} {{ $withdrawal->transaction_description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p>Total Debited Amount: {{ $total }}</p>
    </div>
@endsection
