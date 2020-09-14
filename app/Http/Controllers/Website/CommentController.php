<?php

namespace App\Http\Controllers\Website;

use App\Http\Requests\CommentRequest;

use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends SupperController
{


    public  function  store(CommentRequest $request){


        if (!$request->ajax())
            abort(403);

        $data = $request->only(['email','content','name','article_id']);
        if (auth()->user()){
            $data['name'] = auth()->user()->name;
            $data['email'] = auth()->user()->email;
            $data['user_id'] = auth()->user()->id;
        }
       $comment =  Comment::create($data);

        $comment_view = view('website.components.article_comment',compact('comment'))->render();

        return response(['status'=>true, 'comment'=>$comment_view ,'message'=>trans('admin.added_successfully')]);


   }


   public  function  add_to_favorite(Request $request ,Comment $comment){


        if ($request->ajax()){
            if ($request->is_action== true){
                $comment->decrement('count_favorite');
            }else{
                $comment->increment('count_favorite');
            }


            if (auth()->user()){
                $comment->favorite()->toggle(auth()->user());
            }



            return response(['status'=>true, 'count_favorite'=>$comment->count_favorite]);
        }

    abort(403);

   }


}
