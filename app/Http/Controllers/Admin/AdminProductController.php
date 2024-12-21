<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ProductService;

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
}
