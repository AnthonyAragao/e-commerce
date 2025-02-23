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
            'bestSellersProducts' => $this->productService->bestSellers(),
            'latestProducts' => $this->productService->latestProducts(),
            'categories' => Category::all(),
        ]);
    }
}
