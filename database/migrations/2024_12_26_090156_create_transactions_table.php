<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->unsignedBigInteger('sender_wallet_id');
            // $table->unsignedBigInteger('receiver_wallet_id');
            $table->decimal('amount', 15, 2);

            $table->foreignUuid('sender_wallet_id')->references('id')->on('wallets')->onDelete('cascade');
            $table->foreignUuid('receiver_wallet_id')->references('id')->on('wallets')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
