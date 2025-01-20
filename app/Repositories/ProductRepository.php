<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\{Category, Product};
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(
        private Product $product,
        private Category $category
    ){}

    public function getAll()
    {
        return $this->product
            ->with(['category', 'images', 'reviews'])
            ->paginate(15);
    }

    public function getProductsByCategory($slug)
    {
        $category = $this->category
            ->whereSlug($slug)
            ->first();

        return $category->products()
            ->with(['category', 'images', 'reviews'])
            ->paginate(15);
    }

    public function findBySlug($slug)
    {
        return $this->product
            ->with('category', 'images')
            ->where('slug', $slug)
            ->first();
    }

    public function create($data)
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

    public function update($slug, $data)
    {
        $product = $this->product
            ->where('slug', $slug)
            ->first();

        // Refatorar depois, para não repetir o código no método createProduct e updateProduct
        $product->update([
            'name' => $data['name'],
            'slug' =>  $this->product->createUniqueSlug($data['name']),
            'description' => $data['description'],
            'regular_price' => $data['regular_price'],
            'sale_price' => $data['sale_price'],
            'sku' => $data['sku'],
            'stock' => $data['stock'],
            'category_id' => $data['category'],
        ]);

        return $product;
    }

    public function delete($id)
    {
        $product = $this->product->find($id);
        foreach ($product->images as $image) {
            $image->delete();
        }

        return $product->delete();
    }
}
