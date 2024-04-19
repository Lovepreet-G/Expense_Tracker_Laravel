<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WithdrawalController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routes/web.php
Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('home');;


// Define a route for the all_transactions page

Route::get('/all_transactions', [
    'uses' => 'App\Http\Controllers\TransactionController@index',
    'as' => 'all_transactions'
]);


Route::get('/deposits', [
    'uses' => 'App\Http\Controllers\DepositController@index',
    'as' => 'deposits'    
]);


Route::get('/withdrawals', [
    'uses' => 'App\Http\Controllers\WithdrawalController@index',
    'as' => 'withdrawals'  
]);



Route::get('/add_transaction', [
    'uses' => 'App\Http\Controllers\TransactionController@create',
    'as' => 'add_transaction' 
]);

Route::middleware(['auth'])->post('/add_transaction', [TransactionController::class, 'store']);







require __DIR__.'/auth.php';
