<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\SupperController;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Contactus;
use App\Models\Coupon;
use App\Models\SuggestionCoupon;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends SupperController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

//        dd(Coupon::first());

        $this->data['route'] = 'dashboard.index';
        $this->data['title'] = trans('admin.dashboard');
        $this->data['dashboard_dir'] = "{$this->data['dashboard_dir']}.{$this->data['route']}";
        $this->data["breadcrumbs"] = [trans("admin.dashboard") => $this->data['url_prefix'], $this->data['title'] => $this->data['url_prefix'] . "/" . $this->data['route']];

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



//        $coupons = Coupon::query();
//
//        $this->data['users_count'] = User::count();
          $this->data['new_users_count'] = User::user()->whereDate('created_at',">=",Carbon::now()->subMonth())->count();
          $this->data['new_admin_count'] = User::admin()->whereDate('created_at',">=",Carbon::now()->subMonth())->count();
          $this->data['new_article_count'] = Article::whereDate('created_at',">=",Carbon::now()->subMonth())->count();
          $this->data['new_comment_count'] = Comment::whereDate('created_at',">=",Carbon::now()->subMonth())->count();



        return view("dashboard.home",$this->data);
    }
}
