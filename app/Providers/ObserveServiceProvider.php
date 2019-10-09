<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Entities\Order;
use App\Observers\OrderObserver;
use App\Entities\OrderProduct;
use App\Observers\OrderProductObserver;

class ObserveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Order::observe(OrderObserver::class);
        OrderProduct::observe(OrderProductObserver::class);
    }
}
