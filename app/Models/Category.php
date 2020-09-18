<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model implements \Astrotomic\Translatable\Contracts\Translatable
{

    use Translatable; // 2. To add translation methods

    public $translatedAttributes = ['title','slug',  'description','keywords'];


    protected $guarded = [] ;

}
