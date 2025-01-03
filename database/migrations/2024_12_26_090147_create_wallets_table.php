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
        Schema::create('wallets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('wallet_type_id');
            $table->string('name');
            $table->string('balance')->default(0.00);

            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignUuid('wallet_type_id')->references('id')->on('wallet_types')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
