<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    protected $guarded = [];
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->image);
    }


    public function setImageAttribute($value)
    {
        @Storage::delete($this->image);
        $this->attributes['image'] = $value->store('articles');


    }

}
