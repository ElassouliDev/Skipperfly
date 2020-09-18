<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArticleController extends SupperController
{

    public function __construct()
    {
        parent::__construct();
//        $this->data['authors'] = User::admin()->get();
//        $this->data['tags'] = Tag::all();
//        $this->data['categories'] = Category::all();
//        $this->data['nav_categories'] = Category::where('in_nav',true)->get();
//


    }

    public  function  show($slug){


        $this->data['article'] = Article::whereHas('translations',function ($query)use ( $slug){
            $query->where('slug',$slug);
        })->firstOrFail();

        $this->data['related_articles'] = Article::where('category_id',$this->data['article']->category_id)->take(3)->get();
        $this->data['more_articles'] = Article::inRandomOrder()->take(3)->get();
        $this->data['title'] = $this->data['article']->title;
//dd($article->toArray());

        $this->data['article']->increment('count_view');

   //    dd([$this->data['articles'] ,$this->data['articles_paginate_data']]);
       return view('website.blog' , $this->data);
   }

    public  function  add_to_favorite(Request $request ,Article $article){


        if ($request->ajax()){
            if ($request->is_action== true){
                $article->decrement('count_favorite');
            }else{
                $article->increment('count_favorite');
            }


            if (auth()->user()){
                $article->favorite()->toggle(auth()->user());
            }



            return response(['status'=>true, 'count_favorite'=>$article->count_favorite]);
        }

        abort(403);

    }
}
