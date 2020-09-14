<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SupperController extends Controller
{

    public function __construct()
    {

//        $this->data['settings_website'] = Setting::pluck('value','key')->toArray();
        View::share('settings_website',  Setting::pluck('value','key')->toArray());



    }

}
