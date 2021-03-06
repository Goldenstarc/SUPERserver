<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id' , 'photo_id' ,'is_active' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){

        return $this->belongsTo('App\Role');

    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }


//    public function getPhotoAttribute($photo)
//    {
//        if (! $this->photo()) {
//            return new photo();
//        }
//
//        return $this->photo();
//
//    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }


    public function isAdmin()
    {
        //Todo make this more secure and use check role get the role and then checkl is user in that role /y/n
        if ($this->role && $this->role->name == 'admin' && $this->is_active == 1) {
            return true;

        }

        return false;
}
    public function checkRole($role){


    }



    public function posts(){
        return $this->hasMany('App\Post');

    }

}
