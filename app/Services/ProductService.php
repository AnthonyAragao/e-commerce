<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductService
{
    public function __construct(
        protected ProductRepositoryInterface $productRepository
    ){}

    public function getProducts()
    {
        return $this->productRepository->getProducts();
    }

    public function getProductsByCategory($slug)
    {
        return $this->productRepository->getProductsByCategory($slug);
    }

    public function getCategories()
    {
        return $this->productRepository->getCategories();
    }

    public function getProductBySlug($slug)
    {
        return $this->productRepository->getProductBySlug($slug);
    }

    public function createProduct($data)
    {
        return $this->productRepository->createProduct($data);
    }

    public function updateProduct($id, $data)
    {
        return $this->productRepository->updateProduct($id, $data);
    }

    public function deleteProduct($id)
    {
        return $this->productRepository->deleteProduct($id);
    }
}
