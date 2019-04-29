<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Restaurant;
use Illuminate\Support\Facades\DB;
use App\TableAvailability;
use App\Booking;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Table5';
        $user = Auth::user();
        return view('pages.index', [
            'title' => $title, 
            'user' => $user
        ]);
    }

    public function results(){
        $title = 'Results';
        $user = Auth::user();
        $location = Input::get('location');
        $groupsize = Input::get('groupsize');

        $availableTables = TableAvailability::where([['size_'.$groupsize, '>', 0]])->pluck('restaurant_id');

        
        $restaurants = Restaurant::whereIn('id', $availableTables)->get();
          return view('pages.results', [
            'title' => $title,
            'user' => $user, 
            'location' => $location, 
            'groupsize' => $groupsize, 
            'restaurants' => $restaurants
        ]);
    }

    public function profile(){
        $title = 'My profile';
        $user = Auth::user();
        $bookings = Booking::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('pages.profile', ['title' => $title, 'user' => $user, 'bookings' => $bookings]);
    }
}
