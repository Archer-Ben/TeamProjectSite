<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function user(){
        return $this->hasOne('App\User');
    }
    
    public function tableAvailability(){
        return $this->hasOne('App\TableAvailability');
    }
}
