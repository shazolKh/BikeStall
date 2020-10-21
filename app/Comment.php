<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function bike()
    {
        return $this->belongsTo('App\Bike');
    }
}
