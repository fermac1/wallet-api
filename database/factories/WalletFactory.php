<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WalletType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wallet>
 */
class WalletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'wallet_type_id' => WalletType::factory(),
            'name' => $this->faker->word,
            'balance' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
