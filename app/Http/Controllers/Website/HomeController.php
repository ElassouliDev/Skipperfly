<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends SupperController
{

    public function __construct()
    {

        parent::__construct();
        $this->data['authors'] = User::admin()->get();
//        $this->data['authors'] = Admin::all();
        $this->data['tags'] = Tag::get()->random(10);
        $this->data['categories'] = Category::all();



    }

    public  function  index(){


        $this->data['last_article'] = Article::latest()->take(3)->get();
        $this->data['articles'] = Article::latest()->paginate(8);
        $this->data['articles_paginate_data'] =    Arr::except($this->data['articles']->toArray(),['data']);
        $this->data['title'] = trans('admin.home');

   //    dd([$this->data['articles'] ,$this->data['articles_paginate_data']]);
       return view('website.index' , $this->data);
   }

   public  function  show_category($slug){



        $this->data['category'] = Category::whereHas('translations',function ($query)use ( $slug){
            $query->where('slug',$slug);
        })->firstOrFail();
        $this->data['last_article'] = Article::latest()->take(3)->get();
       $this->data['title'] = $this->data['category']->title;

       $this->data['articles'] = Article::where('category_id',$this->data['category']->id)->latest()->paginate(8);
        $this->data['articles_paginate_data'] =    Arr::except($this->data['articles']->toArray(),['data']);

       return view('website.index' , $this->data);
   }
   public  function  show_tag($slug){


        $tag = Tag::whereHas('translations',function ($query)use ( $slug){
            $query->where('slug',$slug);
        })->firstOrFail();

       $this->data['title'] = $tag->title;

       $this->data['last_article'] = Article::latest()->take(3)->get();
        $this->data['articles'] = Article::whereHas('tags',function ($query) use ($tag){
            $query->where('id',$tag->id);
        })->latest()->paginate(8);
        $this->data['articles_paginate_data'] =    Arr::except($this->data['articles']->toArray(),['data']);

       return view('website.index' , $this->data);
   }

}
