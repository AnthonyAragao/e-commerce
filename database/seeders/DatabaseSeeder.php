<?php

namespace Database\Seeders;

use App\Models\Order;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
        ]);

        Order::factory()
            ->count(30)
            ->hasItems(rand(1, 5))
            ->create();
    }
}
