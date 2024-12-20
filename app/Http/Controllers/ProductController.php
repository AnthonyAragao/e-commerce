<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        private ProductService $productService
    ){}

    public function index()
    {
        $product = $this->productService->getProducts();
        dd($product);
    }

    public function show($id)
    {
        return $this->productService->getProduct($id);
    }
}
