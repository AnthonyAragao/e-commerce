<?php

namespace App\Services;

use App\Repositories\Contracts\OrderRepositoryInterface;

class OrderService
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository
    ){}

    public function getOrders(array $filters)
    {
        return $this->orderRepository->getAll($filters);
    }

    public function getOrder(string $id)
    {
        return $this->orderRepository->findById($id);
    }
}
