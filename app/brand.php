<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $fillable = [
        'name',
        'photo_id' ,
        'url',
        'description',


    ];





    public function photo(){
        return $this->belongsTo('App\Photo');

    }
}



