<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = [
        'title', 'count_title','default_count', 'max_count', 'price' , 'product_id'
    ];
}
