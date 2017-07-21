<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{

    public static $types  = array('','integer', 'string' , 'float' , 'timestamp');

    protected $fillable = [
        'user_id',
        'name',
        'type',
    ];


    public function user(){

        return $this->belongsTo('App\User');
    }

//    public function getTypeAttribute($value)
//    {
//        return ProductSpecification::$types[$value];
//    }

    public function setTypeAttribute($value)
    {
        $this->attributes['type']  = ProductSpecification::$types[$value];
    }

}
