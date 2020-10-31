<?php

namespace App\Http\Controllers\Website;

use App\Events\SubscribeEvent;
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


    public function store(SubscribeRequest $request)
    {


        //dd($request->all());
        if ($request->has('action_name') && $request->action_name === 'unsubscribe') {
            Subscribe::where('email', $request->email)->delete();

            return response(['status' => true, 'msg' => trans('admin.unsubscribed success')]);


        }


        if (Subscribe::where('email', $request->email)->exists())
            return response(['status' => true, 'msg' => trans('admin.already subscribed')]);


        Subscribe::firstOrCreate(['email' => $request->email]);

        event(new SubscribeEvent($request->email));
        return response(['status' => true, 'msg' => trans('admin.send_email_in_success')]);


    }

    public function unsubscribe(SubscribeRequest $request)
    {


        //dd($request->all());
        if ($request->has('email') && !empty($request->email)) {
            Subscribe::where('email', $request->email)->delete();

            return redirect('/')->with('status',trans('admin.unsubscribed success'));


        }

        abort(404);

    }


}
