<?php

namespace App\Services;

use App\Repositories\Contracts\CustomerRepositoryInterface;

class CustomerService
{
    public function __construct(
        private CustomerRepositoryInterface $customerRepository
    ){}

    public function getCustomers()
    {
        return $this->customerRepository->getAll();
    }

    public function getCustomer(string $id)
    {
        return $this->customerRepository->findById($id);
    }
}
