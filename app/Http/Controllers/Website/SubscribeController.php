<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscribeRequest;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Category;
use App\Models\Subscribe;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SubscribeController extends SupperController
{


    public  function  store(SubscribeRequest $request){


        Subscribe::firstOrCreate(['email'=>$request->email]);


        return response(['status'=>true, 'msg'=>trans('admin.send_email_in_success')]);


   }


}
