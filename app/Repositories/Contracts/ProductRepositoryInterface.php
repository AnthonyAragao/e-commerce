<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface
{
    public function getProducts();

    public function getProduct($id);

    public function createProduct($data);

    public function updateProduct($id, $data);

    public function deleteProduct($id);
}
