<?php

namespace App\Observers;

use App\Entities\Order;
use App\Entities\OrderLog;
use App\Entities\Cart;
use App\Entities\OrderProduct;
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
        $id_user = Auth::user()->id;

        $carts = Cart::where('id_user', $id_user)->with('product')->get();
        foreach ($carts as $cart) {
            $product = new OrderProduct;
            $product->id_product = $cart->id_product;
            $product->id_order = $order->id;
            $product->price = $cart->product->price;
            $product->quantity = $cart->quantity;
            $product->size = $cart->size;
            $product->color = $cart->color;
            $product->image = $cart->image;
            $product->save();
        }

        Cart::where('id_user', $id_user)->delete();
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
