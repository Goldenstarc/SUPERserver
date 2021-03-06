<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'parent_category_id',

    ];

    public function ParentCategory()
    {
        return $this->hasOne('App\Category', 'id', 'parent_category_id');
    }
}
