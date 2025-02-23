<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\ProductService;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __construct(
        private ProductService $productService,
    ){}

    public function index()
    {
        return Inertia::render('Products/Index', [
            'products' => $this->productService->listProducts(),
            'categories' => Category::all(),
            // best sellers
            // featured products
        ]);
    }
}
