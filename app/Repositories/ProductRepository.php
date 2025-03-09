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
            ->orderBy('created_at', 'desc')
            ->paginate(15);
    }

    public function getProductsByCategory($slug)
    {
        $category = $this->category
            ->whereSlug($slug)
            ->first();

        return $category->products()
            ->with(['category', 'images', 'reviews'])
            ->paginate(16);
    }

    public function getRelatedProducts($product)
    {
        return $this->product
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->with('images')
            ->inRandomOrder()
            ->limit(5)
            ->get();
    }

    public function getTopSellingProducts()
    {
        return $this->product
            ->orderBy('sales', 'desc')
            ->with('images')
            ->limit(5)
            ->get();
    }

    public function getLatestProducts()
    {
        return $this->product
            ->orderBy('created_at', 'desc')
            ->with('images')
            ->limit(5)
            ->get();
    }

    public function findBySlug($slug)
    {
        return $this->product
            ->with([
                'category',
                'images',
                'reviews' => fn($query) => $query->with('user:id,name'),
            ])
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
