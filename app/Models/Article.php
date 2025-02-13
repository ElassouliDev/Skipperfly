<?php

namespace App\Models;

use App\User;
use Astrotomic\Translatable\Translatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model implements \Astrotomic\Translatable\Contracts\Translatable
{


    use Translatable; // 2. To add translation methods


    protected $guarded = [] ;
    protected $appends = ['image_url' , 'count_comments'  ,'in_favorite'];
    public $translatedAttributes = ['title','slug',  'description','content','keywords'];


    protected  $with = ['tags'];

    public function getImageUrlAttribute()
    {
        return !in_array( $this->image, ['B1.png','B2.png','B3.png','B4.png','B5.png','B6.png','B7.png','B8.png'])?
            url('storage/' . $this->image):
            url('website//assets/img/'.$this->image )
            ;
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('F d,Y');
    }




    public function setImageAttribute($value)
    {
        if (is_file($value)){
            @Storage::delete($this->image);
            $this->attributes['image'] = $value->store('articles');

        }elseif(in_array($value, ['B1.png','B2.png','B3.png','B4.png','B5.png','B6.png','B7.png','B8.png'])){
            $this->attributes['image'] = $value;

        }
    }




    public  function  tags(){
        return $this->belongsToMany(Tag::class);
    }
    public  function  author(){
        return $this->belongsTo(User::class,'user_id');
    }
    public  function  category(){

        return $this->belongsTo(Category::class);
    }

    public  function  comments(){
                return $this->hasMany(Comment::class ,'article_id' , 'id') ;
    }

    public function getCountCommentsAttribute()
    {
        return  $this->comments()->count();
    }


    public  function  favorite(){
        return $this->belongsToMany(User::class,'favorite_article' );
    }


    public  function  getInFavoriteAttribute(){
        return auth()->user()?$this->favorite()->where('id', auth()->id())->count() >0:false;
    }

}
