<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductService
{
    public function __construct(
        protected ProductRepositoryInterface $productRepository
    ){}

    public function listProducts()
    {
        return $this->productRepository->getAll();
    }

    public function getProductsByCategory(string $slug)
    {
        return $this->productRepository->getProductsByCategory($slug);
    }

    public function getProductBySlug(string $slug)
    {
        return $this->productRepository->findBySlug($slug);
    }

    public function getRelatedProducts($product)
    {
        return $this->productRepository->getRelatedProducts($product);
    }

    public function createProduct(array $data)
    {
        return $this->productRepository->create($data);
    }

    public function updateProduct(string $slug, array $data)
    {
        return $this->productRepository->update($slug, $data);
    }

    public function deleteProduct(string $id)
    {
        return $this->productRepository->delete($id);
    }
}
