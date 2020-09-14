<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded =[] ;

    protected $appends =['image' , 'created_at_date' , 'in_favorite'];

    public function getImageAttribute()
    {
        return $this->user ? $this->user->image_url:  url('website/assets/img/author.png');
    }

   public function getCreatedAtDateAttribute()
    {
        return Carbon::parse($this->created_at)->format('F m,Y');
    }

    public  function  user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public  function  favorite(){
        return $this->belongsToMany(User::class,'favorite_comment' );
    }
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('F d,Y');
    }


     public  function  getInFavoriteAttribute(){
            return auth()->user()?$this->favorite()->where('id', auth()->id())->count() >0:false;
        }




}
