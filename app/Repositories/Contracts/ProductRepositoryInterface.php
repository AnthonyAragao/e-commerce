<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface
{
    public function getProducts();

    public function getCategories();

    public function getProductsByCategory($slug);

    public function getProductBySlug($slug);

    public function createProduct($data);

    public function updateProduct($id, $data);

    public function deleteProduct($id);
}
