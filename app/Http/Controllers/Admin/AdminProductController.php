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
            'flash' => session('success'),
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
            ->with('success', 'Product created successfully');
    }


    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return to_route('admin.products.index')
            ->with('success', 'Product deleted successfully');
    }
}
