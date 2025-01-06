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
        return inertia('Admin/Orders/Index', [
            'orders' => $this->orderService->getOrders()
        ]);
    }

    public function show(string $id)
    {
        return inertia('Admin/Orders/Show', [
            'order' =>$this->orderService->getOrder($id)
        ]);
    }
}
