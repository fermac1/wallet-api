<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/users', [UserController::class, 'index']);
Route::get('/wallets', [WalletController::class, 'index']);
Route::get('/wallets/{wallet}', [WalletController::class, 'show']);

Route::post('/transactions/send', [TransactionController::class, 'sendMoney']);
