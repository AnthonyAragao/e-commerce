<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = \App\Models\Order::class;

    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'declined']),
            'total_price' => $this->faker->randomFloat(2, 1, 200),
            'user_id' => \App\Models\User::factory(),
            'order_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'payment_id' => \App\Models\Payment::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (\App\Models\Order $order) {
            \App\Models\OrderItem::factory()
                ->count(rand(1, 5))
                ->create(['order_id' => $order->id]);
        });
    }
}
