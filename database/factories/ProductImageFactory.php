<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    protected $model = \App\Models\ProductImage::class;

    public function definition(): array
    {
        $imagePaths = [
            'products/alexa.png',
            'products/cadeira.png',
            'products/fone.png',
            'products/notebook.png',
            'products/televisao.png',
            'products/pc.png',
            'products/ps4.png',
            // 'products/example.jpg',
        ];

        return [
            'product_id' => ProductFactory::new(),
            'image_path' => $this->faker->randomElement($imagePaths),
        ];
    }
}
