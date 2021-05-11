<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pre ;

class System extends Model
{
    protected $fillable = [
        'title', 'price','type', 'product_id',
    ];

    function pers()
    {
        return $this->hasMany(Pre::class);
    }
}
