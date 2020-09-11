<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Article extends Model
{

    use HasSlug;

    protected $guarded = [] ;
    protected $appends = ['image_url'];


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->usingSeparator('_');
    }
    public function getImageUrlAttribute()
    {
        return $this->image ?
            url('storage/' . $this->image):
            url('images/article.png' )
            ;
    }

    public function setImageAttribute($value)
    {
        if (is_file($value)){
            @Storage::delete($this->image);
            $this->attributes['image'] = $value->store('articles');

        }
    }




    public  function  tags(){
        return $this->belongsToMany(Tag::class);
    }
    public  function  author(){
        return $this->belongsTo(Admin::class,'admin_id');
    }
    public  function  category(){

        return $this->belongsTo(Category::class);
    }


}
