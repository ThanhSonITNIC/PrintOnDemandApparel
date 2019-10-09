<?php

namespace App\Observers;

use App\Entities\Order;
use App\Entities\OrderLog;
use Illuminate\Support\Facades\Auth;

class OrderObserver
{
    /**
     * Handle the order "created" event.
     *
     * @param  \App\Entities\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        //
    }

    /**
     * Handle the order "updated" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        // Write log
        $log = new OrderLog;
        $log->id_user = Auth::user()->id;
        $log->id_order = $order->id;
        $log->content = json_encode($order->getChanges());
        $log->save();
    }

    /**
     * Handle the order "deleted" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the order "restored" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the order "force deleted" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
