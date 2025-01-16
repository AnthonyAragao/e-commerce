<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function __construct(
        private User $user
    ){}

    public function getAll()
    {
        return $this->user
                // ->where('role', 'customer')
                ->orderBy('name')
                ->paginate(15);
    }

    public function findById(string $id)
    {}
}
