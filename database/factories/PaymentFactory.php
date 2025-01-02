<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    protected $model = \App\Models\Payment::class;

    public function definition(): array
    {
        return [
            'payment_method' => $this->faker->randomElement(['credit card', 'paypal', 'stripe']),
            'payment_status' => $this->faker->randomElement(['pending', 'paid', 'failed']),
            'transaction_id' => $this->faker->uuid(),
            'amount' => $this->faker->randomFloat(2, 1, 200),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
