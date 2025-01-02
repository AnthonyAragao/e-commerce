<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence('45'),
            'regular_price' => $this->faker->randomFloat(2, 1, 100),
            'sale_price' => $this->faker->randomFloat(2, 1, 100),
            'sku' => $this->faker->uuid(),
            'stock' => $this->faker->numberBetween(1, 100),
            'sales' => $this->faker->numberBetween(1, 100),
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }


    public function configure(): self
    {
        return $this->afterCreating(function (\App\Models\Product $product) {
            \App\Models\ProductImage::factory()
                ->count(1)
                ->create(['product_id' => $product->id]);
        });
    }
}
