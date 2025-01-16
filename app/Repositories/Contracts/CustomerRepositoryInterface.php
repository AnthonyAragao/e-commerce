<?php

namespace App\Repositories\Contracts;

interface CustomerRepositoryInterface
{
    public function getAll();
    public function findById(string $id);
}
