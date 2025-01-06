<?php

namespace App\Http\Controllers\Admin;

use App\Services\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;

class AdminProductController extends Controller
{
    public function __construct(
        private ProductService $productService
    ){}

    public function index()
    {
        return inertia('Admin/Products/Index', [
            'products' => $this->productService->getProducts()
        ]);
    }

    public function create()
    {
        return inertia('Admin/Products/Form', [
            'categories' => $this->productService->getCategories()
        ]);
    }

    public function store(ProductRequest $request)
    {
        $this->productService->createProduct($request->all());
        return to_route('admin.products.index')
            ->with('message', 'Product created successfully');
    }

    public function edit($slug)
    {
        $product = $this->productService->getProductBySlug($slug);

        return inertia('Admin/Products/Form', [
            'product' => $product,
            'categories' => $this->productService->getCategories(),
            'isUpdating' => true,
        ]);
    }

    public function update(ProductRequest $request, $slug)
    {
        $this->productService->updateProduct($request->all(), $slug);
        return to_route('admin.products.index')
            ->with('message', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return to_route('admin.products.index')
            ->with([
                'message' => 'Product deleted successfully',
                'key' => now()->timestamp,
            ]);
    }
}
