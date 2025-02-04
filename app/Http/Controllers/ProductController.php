<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Models\Category;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function __construct(
        private ProductService $productService,
    ){}

    public function index()
    {
        return Inertia::render('Products/Index', [
            'products' => $this->productService->listProducts(),
            'categories' => Category::all(),
        ]);
    }

    public function category($slug)
    {
        return Inertia::render('Products/Category', [
            'products' => $this->productService->getProductsByCategory($slug),
            'categories' => Category::all(),
        ]);
    }

    public function show($slug)
    {
        $product = $this->productService->getProductBySlug($slug);
        $relatedProducts = $this->productService->getRelatedProducts($product);

        return Inertia::render('Products/Show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }
}
