<?php

namespace App\Mail;

use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public  $user ;
    public function __construct($user)
    {
        $this->user = $user;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $setting_app = Setting::pluck('value','key')->toArray();

        return $this->markdown('emails.welcome', ['user'=>$this->user  , 'setting_app'=>$setting_app ])
         ->subject("Thank You! {$this->user->name} for subscribing in {$setting_app['title']} Blog");
    }
}
