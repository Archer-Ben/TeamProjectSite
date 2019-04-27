<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'location', 'latitude', 'longitude', 'phone_number', 'max_table_size', 'user_id'
    ];

    public function user(){
        return $this->hasOne('App\User');
    }
    
    public function tableAvailability(){
        return $this->hasOne('App\TableAvailability');
    }
}
