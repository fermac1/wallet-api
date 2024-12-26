<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WalletType>
 */
class WalletTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'minimum_balance' => $this->faker->randomFloat(2, 0, 100),
            'monthly_interest_rate' => $this->faker->randomFloat(4, 0, 0.1),
        ];
    }
}
