<?php

namespace App\Http\Controllers\Admin;

use App\Services\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;

class AdminProductController extends Controller
{
    public function __construct(
        private ProductService $productService,
    ){}

    public function index()
    {
        return inertia('Admin/Products/Index', [
            'products' => $this->productService->listProducts()
        ]);
    }

    public function create()
    {
        return inertia('Admin/Products/Form', [
            'categories' => Category::all(),
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
            'categories' => Category::all(),
            'isUpdating' => true,
        ]);
    }

    public function update(ProductRequest $request, $slug)
    {
        $this->productService->updateProduct($slug, $request->all());
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
