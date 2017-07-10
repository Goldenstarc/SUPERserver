<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads = '/images/';
    protected $defaultImg = '/images/defaultImg.jpg';

    protected $fillable = ['file'];


    //public getactula addres of phot ;
    public function getFileAttribute($photo){

        if($photo)
            return $this->uploads . $photo;
        return $this->defaultImg;
    }

}
