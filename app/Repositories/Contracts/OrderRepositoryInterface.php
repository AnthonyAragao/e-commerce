<?php

namespace App\Repositories\Contracts;

interface OrderRepositoryInterface
{
    public function getOrders();
    public function getOrder(string $id);
}
