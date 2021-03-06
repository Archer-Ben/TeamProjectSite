<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'owns_restaurant'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* Each user may relate to many bookings */
    public function booking(){
        return $this->hasMany('App\Booking');
    }

    /* Each user may own a single restaurant */
    public function restaurant(){
        return $this->hasOne('App\Restaurant');
    }

    public function ownsRestaurant(){
        return $this->owns_restaurant;
    }

    public function openRestaurant(){
        $this->owns_restaurant = true;
    }

    public function destroyRestaurant(){
        $this->owns_restaurant = false;
    }
}
