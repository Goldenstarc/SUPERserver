<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'Category_id',


    ];




    public function category()
    {
        return $this->hasOne('Categories', 'id', 'categories_id');
    }


}
