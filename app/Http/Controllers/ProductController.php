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
        return Inertia::render('Products/Index', [
            'products' => $this->productService->getProducts(),
            'categories' => $this->productService->getCategories(),
        ]);
    }

    public function category($slug)
    {
        return Inertia::render('Products/Category', [
            'products' => $this->productService->getProductsByCategory($slug),
            'categories' => $this->productService->getCategories(),
        ]);
    }

    public function show($id)
    {}
}
