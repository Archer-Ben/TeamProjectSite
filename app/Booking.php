<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /* Each booking may only relate to a single user */
    public function user(){
        return $this->belongsTo('App\User');
    }

    /* Each booking may only relate to a single restaurant */
    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
}
