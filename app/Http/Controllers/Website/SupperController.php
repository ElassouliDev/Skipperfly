<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use \Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class SupperController extends Controller
{

    public function __construct()
    {

//        $this->data['settings_website'] = Setting::pluck('value','key')->toArray();
        View::share('settings_website', Setting::pluck('value', 'key')->toArray());

        config()->set('translatable.locale', app()->getLocale());
        $this->data['nav_categories'] = Category::where('in_nav', true)->get();



//        Session::push('key1',true);
//        dd();
        ;
//        dd([Cookie::has('key'), Cookie::queue('key','1' , 360), Cookie::has('key')]);

//        \cookie('tes', 'dsdas',250);
//        dd(\cookie('tes'));
//

//    ;
//        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
//


//        dd(Cookie::getQueuedCookies());

                if (isset($_COOKIE['show_subscribe1']) || auth()->check()){
                    $this->data['show_subscribe'] =false;
                }else{
                    setcookie('show_subscribe1','500' ,  time() + 3600, "/");
                    $this->data['show_subscribe'] =true;
                }

//        dd(\session()->all());
      /*  if (Session::has('show_subscribe')) {
            $this->data['show_subscribe'] = false;
        } else {
            Session::put('show_subscribe', "tstsss");
            $this->data['show_subscribe'] = true;
        }*/

//        dd($this->data['show_subscribe']);

    }

}
