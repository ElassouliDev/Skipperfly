<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends SupperController
{

    public function __construct()
    {

        parent::__construct();
        $this->data['authors'] = Admin::all();
        $this->data['tags'] = Tag::all();
        $this->data['categories'] = Category::all();
        $this->data['nav_categories'] = Category::where('in_nav',true)->get();
        $this->data['nav_categories'] = Category::where('in_nav',true)->get();



    }

    public  function  index(){


        $this->data['last_article'] = Article::latest()->take(3)->get();
        $this->data['articles'] = Article::paginate(8);
        $this->data['articles_paginate_data'] =    Arr::except($this->data['articles']->toArray(),['data']);
        $this->data['title'] = trans('admin.home');

   //    dd([$this->data['articles'] ,$this->data['articles_paginate_data']]);
       return view('website.index' , $this->data);
   }

   public  function  show_category($slug){



        $this->data['category'] = Category::where('slug',$slug)->firstOrFail();
        $this->data['last_article'] = Article::latest()->take(3)->get();
       $this->data['title'] = $this->data['category']->title;

       $this->data['articles'] = Article::where('category_id',$this->data['category']->id)->paginate(8);
        $this->data['articles_paginate_data'] =    Arr::except($this->data['articles']->toArray(),['data']);

       return view('website.index' , $this->data);
   }
   public  function  show_tag($slug){


        $tag = Tag::where('slug',$slug)->firstOrFail();
        $this->data['last_article'] = Article::latest()->take(3)->get();
        $this->data['articles'] = Article::whereHas('tags',function ($query) use ($tag){
            $query->where('id',$tag->id);
        })->paginate(8);
        $this->data['articles_paginate_data'] =    Arr::except($this->data['articles']->toArray(),['data']);

       return view('website.index' , $this->data);
   }

}
