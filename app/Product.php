<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'Category_id',
        'user_id',
        'name',
        'code',
        'photo_id',
        'brand_id',
        'price',
        'min_price',
        'off',
        'short_description',
        'long_description',


    ];




    public function category()
    {
        return $this->hasOne('Categories', 'id', 'Category_id');
    }

    public function specifications(){
        return $this->hasMany('App\Comments', 'product_id');
    }
}
