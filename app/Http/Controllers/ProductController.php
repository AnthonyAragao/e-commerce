<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function __construct(
        private ProductService $productService
    ){}

    public function index()
    {
        $products = $this->productService->getProducts();
        return Inertia::render('Products/Index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {}
}
