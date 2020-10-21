<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    public function specs()
    {
        return $this->hasMany('App\FullSpac', 'bike_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment' );
    }
}
