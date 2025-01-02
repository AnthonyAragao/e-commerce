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
            'products/0kGQ2jDJEUuWRKoS5403sB7RWB9oBP4E1WSov8dJ.jpg',
            'products/02R0L18EsjDjNkIR6uwjHFyL0nNkWWvMR7HQJAor.webp',
            'products/a4xCBfCRGiMOcvkBl0DtwXXytMh3dNpycjfS5Ugn.webp',
            'products/bKegbgJmrOTYBcz2LotOUbEH32ukuXQoJGRU3Hok.jpg'
        ];

        return [
            'product_id' => ProductFactory::new(),
            'image_path' => $this->faker->randomElement($imagePaths),
        ];
    }
}
