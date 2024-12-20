<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('product_id')->constrained('products');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('orders_items');
    }
};
