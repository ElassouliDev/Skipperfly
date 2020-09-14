<?php

namespace App\Mail;

use App\Models\Article;
use App\Models\Setting;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;

class ArticleEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public  $user ;
    public  $article ;
    public function __construct( $article,$user=null)
    {
        $this->user = $user;
        $this->article = $article;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $setting_app = Setting::pluck('value','key')->toArray();

        return $this->markdown('emails.new_article' , ['user'=>$this->user , 'article'=>$this->article , 'setting_app'=>$setting_app ])
            ->subject("New Tourism Article Published – {$this->article['title']}");
    }
}
