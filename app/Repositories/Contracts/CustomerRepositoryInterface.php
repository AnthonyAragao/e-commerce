<?php

namespace App\Repositories\Contracts;

interface CustomerRepositoryInterface
{
    public function getCustomers();
    public function getCustomer(string $id);
}
