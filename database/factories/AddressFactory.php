<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class AddressFactory extends Factory
{
    protected $model = \App\Models\Address::class;

    public function definition(): array
    {
        return [
            'address_line' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'postal_code' => $this->faker->postcode(),
            'country' => $this->faker->country(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
