<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Restaurant;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Table5';
        $user = Auth::user();
        // $restaurant = Restaurant::where('user_id', $user->id)->first();
        // return view('pages.index', ['title' => $title, 'user' => $user, 'restaurant' => $restaurant]);
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
        $restaurants = Restaurant::all();
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
        return view('pages.profile', ['title' => $title, 'user' => $user]);
    }
}
