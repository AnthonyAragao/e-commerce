<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface
{
    public function getAll();

    public function getProductsByCategory(string $slug);

    public function getRelatedProducts($product);

    public function findBySlug(string $slug);

    public function create(array $data);

    public function update(string $slug, array $data);

    public function delete(string $id);
}
