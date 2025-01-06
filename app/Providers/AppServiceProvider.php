<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Repositories\{CustomerRepository, OrderRepository, ProductRepository};
use App\Repositories\Contracts\{CustomerRepositoryInterface, OrderRepositoryInterface, ProductRepositoryInterface};

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
    }

    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
