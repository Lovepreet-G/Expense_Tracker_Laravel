@extends('layout')

@section('title', 'Add Transaction')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Add Transaction</h1>
        <h6><a href="{{ route('home') }}">Back to Home Page</a></h6>
        <!-- Transaction Form -->
        <form method="post" action="{{ route('add_transaction') }}">
            @csrf
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
                <small id="emailHelp" class="form-text text-muted">Add Amount in negative if it is debit (e.g., amount = -100)</small>
            </div>
            <div class="form-group">
                <label for="transaction_type">Transaction Type:</label>
                <input type="text" class="form-control" id="transaction_type" name="transaction_type" required>
                <small id="emailHelp" class="form-text text-muted">(e.g., Withdrawal, Credit, Deposit etc)</small>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
