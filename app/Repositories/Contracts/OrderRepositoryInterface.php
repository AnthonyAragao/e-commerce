<?php

namespace App\Repositories\Contracts;

interface OrderRepositoryInterface
{
    public function getAll(array $filters);
    public function findById(string $id);
}
