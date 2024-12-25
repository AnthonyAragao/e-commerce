<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'slug', 'description', 'regular_price', 'sale_price', 'stock', 'sku' , 'sales', 'category_id'];

    public static function createUniqueSlug($name)
    {
        $slug = Str::slug($name, '-');
        $count = 0;

        while (self::where('slug', $slug)->exists()) {
            $count++;
            $slug = Str::slug($name, '-') . '-' . $count;
        }

        return $slug;
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }

    public function reviews()
    {
        return $this->hasManyThrough(Review::class, OrderItem::class, 'product_id', 'order_item_id');
    }
}
