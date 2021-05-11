<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pre extends Model
{
    protected $fillable = [
        'system_id', 'pre_system_id'
    ];
}
