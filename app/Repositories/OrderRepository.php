<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Support\Facades\Crypt;
use App\Repositories\Contracts\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    public function __construct(
        private Order $order,
    ){}

    public function getAll(array $filters)
    {
        return $this->order
            ->when(isset($filters['status']), fn($query) => $query->where('status', $filters['status']))
            ->when(isset($filters['paymentMethod']), fn($query) => $query->whereHas('payment', fn($query) => $query->where('payment_method', $filters['paymentMethod'])))
            ->with([
                'user:id,name,email',
                'payment'
            ])
            ->paginate(15);
    }

    public function findById(string $id)
    {
        return $this->order
            ->with([
                'user:id,name,email,phone',
                'items' => fn($query) => $query->with([
                    'product:id,name',
                    'product.images' => fn($query) => $query->select('product_id', 'image_path')->take(1)
                ]),
                'payment:id,amount,payment_method,payment_status,created_at',
                'address'
            ])
            ->findOrFail(Crypt::decrypt($id));
    }
}
