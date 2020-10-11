<?php

namespace App\Mail;

use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscribeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $setting_app = Setting::pluck('value','key')->toArray();
        return $this->markdown('emails.subscribe', ['setting_app'=>$setting_app ])
         ->subject(@$setting_app['subscribe_email_title']??"Thank You! ");
    }
}
