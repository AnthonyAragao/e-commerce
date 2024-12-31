<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function __construct(
        private ProductService $productService
    ){}

    public function index()
    {
        $products = $this->productService->getProducts();

        return inertia('Admin/Products/Index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        return inertia('Admin/Products/Form', [
            'categories' => $this->productService->getCategories(),
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

    // public function upodate(Request $request, $id)
    // {
    //     $this->productService->updateProduct($id, $request->all());
    //     return to_route('admin.products.index')
    //         ->with('message', 'Product updated successfully');
    // }


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
