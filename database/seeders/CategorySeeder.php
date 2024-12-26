<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Smartphones',
            'Notebooks',
            'Tablets',
            'Smartwatches',
            'Laptops',
            'Desktops',
            'Mobile Phones',
            'Acessories',
            'Smart TVs',
            'Portable storage',
            'Headphones',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
