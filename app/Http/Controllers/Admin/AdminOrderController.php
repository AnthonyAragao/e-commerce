<?php

namespace App\Http\Controllers\Admin;

use App\Services\OrderService;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    public function __construct(
        private OrderService $orderService
    ){}

    public function index()
    {
        $orders = $this->orderService->getOrders();

        return inertia('Admin/Orders/Index', [
            'orders' => $orders,
        ]);
    }

    public function show(string $id)
    {}
}
