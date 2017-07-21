<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $fillable = [
        'product_specification_id',
        'value',
        'product_id',
    ];
}
