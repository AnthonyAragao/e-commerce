<?php

namespace App\Services;

use App\Repositories\Contracts\OrderRepositoryInterface;

class OrderService
{
    public function __construct(
        private OrderRepositoryInterface $orderRepository
    ){}

    public function getOrders()
    {
        return $this->orderRepository->getOrders();
    }

    public function getOrder(string $id)
    {
        return $this->orderRepository->getOrder($id);
    }
}
