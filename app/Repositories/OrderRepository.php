<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Support\Facades\Crypt;
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
            ->with([
                'user:id,name,email,phone',
                'items' => fn($query) => $query->with('product:id,name'),
                'payment:id,amount,payment_method,payment_status,created_at',
            ])
            ->findOrFail(Crypt::decrypt($id));
    }
}
