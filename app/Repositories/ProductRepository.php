<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(
        protected Product $product
    ){}

    public function getProducts()
    {
        return $this->product->with('category')->get();
    }

    public function getProduct($id)
    {
        return $this->product->with('category', 'images')->find($id);
    }

    public function createProduct($data)
    {
        return $this->product->create($data);
    }

    public function updateProduct($id, $data)
    {
        $product = $this->product->find($id);
        $product->update($data);

        return $product;
    }

    public function deleteProduct($id)
    {
        return $this->product->destroy($id);
    }
}
