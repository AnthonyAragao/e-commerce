<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['name', 'slug', 'description', 'regular_price', 'sale_price', 'stock', 'sku' , 'sales', 'category_id'];

    protected $hidden = ['created_at', 'updated_at', 'category_id'];

    protected $appends = ['rating', 'review_count'];

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

    public function getRatingAttribute()
    {
        return round($this->reviews->avg('rating'),1);
    }

    public function getReviewCountAttribute()
    {
        return $this->reviews->count();
    }
}
