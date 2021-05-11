<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'condition'
    ];

    function systems()
    {
        return $this->hasMany(System::class);
    }



    function tools()
    {
        return $this->hasMany(Tool::class);
    }
}
