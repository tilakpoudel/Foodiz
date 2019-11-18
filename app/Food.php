<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $fillable = [
        'name','rate','description','image','status'
    ];
}
