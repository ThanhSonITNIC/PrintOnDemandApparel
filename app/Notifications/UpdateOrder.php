<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Entities\Order;
use App\Entities\OrderLog;

class UpdateOrder extends Notification
{
    use Queueable;

    protected $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;

        $log = new OrderLog;
        $log->id_user = auth()->user()->id;
        $log->id_order = $this->order->id;
        
        foreach($this->order->getChanges() as $key => $value){
            $log->content .= $key . ": " . $value . "<br>";
        }

        $log->save();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $message = new MailMessage;
        $message->greeting('Print On Demand Apparel')->subject('Order: "'. $this->order->id .'" updated');

        foreach($this->order->getChanges() as $key => $value){
            $message->line($key . ": " . $value);
        }

        $message->action('View', route('front.orders.show', $this->order->id));
        
        return $message;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
