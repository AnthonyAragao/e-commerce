<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Contracts\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    public function __construct(
        protected Order $order,
    ){}

    public function getOrders()
    {
        return $this->order
            ->with([
                'user:id,name,email',
                'payment'
            ])
            ->paginate(15);
    }


    public function getOrder(string $id)
    {
        return $this->order
            ->with(['user', 'orderItems'])
            ->findOrFail($id);
    }
}
