<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CustomerService;

class AdminCustomerController extends Controller
{
    public function __construct(
        private CustomerService $customerService
    ){}

    public function index()
    {
        return inertia('Admin/Customers/Index', [
            'customers' => $this->customerService->getCustomers()
        ]);
    }
}
