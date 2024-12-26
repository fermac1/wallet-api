<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use App\Models\Wallet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    public function sendMoney(TransactionRequest $request)
    {
        try {
            $request->validated();

            $senderWallet = Wallet::with('walletType')->find($request->sender_wallet_id);
            $receiverWallet = Wallet::find($request->receiver_wallet_id);
            $amount = $request->amount;

            // Check if sender has enough balance
            if (($senderWallet->balance < $amount) || ($senderWallet->balance - $amount) < $senderWallet->walletType->minimum_balance) {
                return response()->json(['message' => 'Insufficient funds or below minimum balance'], 400);
            }

            // Deduct from sender wallet and add to receiver wallet
            $senderWallet->balance -= $amount;
            $receiverWallet->balance += $amount;

            $senderWallet->save();
            $receiverWallet->save();

           $transaction = Transaction::create([
                'sender_wallet_id' => $senderWallet->id,
                'receiver_wallet_id' => $receiverWallet->id,
                'amount' => $amount
            ]);

            return response()->json($transaction, 201);

        } catch (Exception $e) {
            Log::error('Transfer error', [
                'message' => $e->getMessage(),
                'stack' => $e->getTraceAsString(),
            ]);

            return response()->json(['error' => 'An error occurred', 'message' => $e->getMessage()], 500);
        }
    }
}
