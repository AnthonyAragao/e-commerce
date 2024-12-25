<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\{Category, Product};
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(
        protected Product $product,
        protected Category $category
    ){}

    public function getProducts()
    {
        return $this->product->with('category')->get();
    }

    public function getCategories()
    {
        return $this->category->all();
    }

    public function getProduct($id)
    {
        return $this->product->with('category', 'images')->find($id);
    }

    public function createProduct($data)
    {
        DB::beginTransaction();

        try{
            $product = $this->product->create([
                'name' => $data['name'],
                'slug' =>  $this->product->createUniqueSlug($data['name']),
                'description' => $data['description'],
                'regular_price' => $data['regular_price'],
                'sale_price' => $data['sale_price'],
                'sku' => $data['sku'],
                'stock' => $data['stock'],
                'category_id' => $data['category'],
            ]);

            $images = $data['images'];
            if (!empty($images)) {
                foreach ($images as $image) {
                    $image_path = $image['file']->store('products', 'public');

                    $product->images()->create([
                        'image_path' => $image_path,
                    ]);
                }
            }

            DB::commit();
            return;
        } catch (\Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
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
