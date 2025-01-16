<?php

namespace App\Http\Controllers\Admin;

use App\Services\OrderService;
use App\Http\Controllers\Controller;
use App\Models\{Order, Payment};
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function __construct(
        private OrderService $orderService,
        private Order $order,
        private Payment $payment
    ){}

    public function index(Request $request)
    {
        $filters =  $request->all();

        return inertia('Admin/Orders/Index', [
            'orders' => $this->orderService->getOrders($filters),
            'statuses' => $this->order->statuses(),
            'paymentMethods' => $this->payment->paymentMethods(),
            'filters' => $filters
        ]);
    }

    public function show(string $id)
    {
        return inertia('Admin/Orders/Show', [
            'order' =>$this->orderService->getOrder($id)
        ]);
    }
}
