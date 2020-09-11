<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class Admin extends Authenticatable
{
    use  Notifiable;
    protected $guarded =[];
protected $appends = ['image_url'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);

    }

    public function getImageUrlAttribute()
    {
        return $this->image ?
            url('storage/' . $this->image):
        url('images/user.png' )
         ;
    }

    public function setImageAttribute($value)
    {
        if (is_file($value)){
            @Storage::delete( $this->image);
            $this->attributes['image'] = $value->store('admins');

        }
    }

}
