<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait; // add this trait to your user model
    protected $appends = ['image_url'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'about', 'image','social_id', 'social_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);

    }

    public function getImageUrlAttribute()
    {
        return $this->image ?
            url('storage/' . $this->image):
            url('website/assets/img/author.png')         ;
    }

    public function setImageAttribute($value)
    {
        if (is_file($value)){
            @Storage::delete( $this->image);
            $this->attributes['image'] = $value->store('admins');

        }
    }
    public function scopeAdmin($query)
    {

        return $query->whereHas('roles',function ($query){
            $query->where('name','superadministrator');
        });

    } public function scopeUser($query)
    {

        return $query->whereHas('roles',function ($query){
            $query->where('name','user');
        });

    }

}
