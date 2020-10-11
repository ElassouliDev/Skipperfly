<?php

namespace App\Listeners;

use App\Events\SubscribeEvent;
use App\Mail\SubscribeEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SubscribeListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SubscribeEvent  $event
     * @return void
     */
    public function handle(SubscribeEvent $event)
    {
        \Mail::to($event->email)
            ->send(new SubscribeEmail())

        ;
    }
}
