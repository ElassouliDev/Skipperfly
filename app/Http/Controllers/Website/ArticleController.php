<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->data['authors'] = Admin::all();
        $this->data['tags'] = Tag::all();
        $this->data['categories'] = Category::all();
        $this->data['nav_categories'] = Category::where('in_nav',true)->get();
        $this->data['nav_categories'] = Category::where('in_nav',true)->get();



    }

    public  function  show($slug){


        $this->data['article'] = Article::where('slug',$slug)->firstOrFail();
        $this->data['related_articles'] = Article::where('category_id',$this->data['article']->category_id)->take(3)->get();
        $this->data['more_articles'] = Article::inRandomOrder()->take(3)->get();


        $this->data['article']->increment('count_view');

   //    dd([$this->data['articles'] ,$this->data['articles_paginate_data']]);
       return view('website.blog' , $this->data);
   }

}
