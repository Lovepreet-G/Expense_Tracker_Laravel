<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    
</head>

<body>
    <form action="{{ route('logout') }}" method="post" class="logout-btn">
        @csrf
        <button type="submit" class="btn btn-outline-secondary">Logout</button>
    </form>
    <div class="container">
        <h1 class="text-center mt-5">Expense Tracker</h1>
        <div class="btn-container mt-4">
            <a href="{{ route('all_transactions') }}" class="btn btn-primary btn-lg btn-block mb-2">All Transactions</a>
            <a href="{{ route('deposits') }}" class="btn btn-success btn-lg btn-block mb-2">Deposits</a>
            <a href="{{ route('withdrawals') }}" class="btn btn-danger btn-lg btn-block mb-2">Withdrawals</a>
            <a href="{{ route('add_transaction') }}" class="btn btn-info btn-lg btn-block mb-2">Add Transaction</a>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
