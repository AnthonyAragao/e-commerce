<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class ReviewFactory extends Factory
{
    protected $model = \App\Models\Review::class;

    public function definition(): array
    {
        return [
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
