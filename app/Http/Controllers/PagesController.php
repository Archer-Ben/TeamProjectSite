<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Table5';
        $user = Auth::user();
        return view('pages.index', ['title' => $title, 'user' => $user]);
    }

    public function dashboard(){
        $title = 'Dashboard';
        $user = Auth::user();
        return view('pages.dashboard', ['title' => $title, 'user' => $user]);
    }

    public function results(){
        $title = 'Results';
        $user = Auth::user();
        $location = Input::get('location');
        $groupsize = Input::get('groupsize');
        return view('pages.results', ['title' => $title, 'user' => $user, 'location' => $location, 'groupsize' => $groupsize]);
    }

    public function profile(){
        $title = 'My profile';
        $user = Auth::user();
        return view('pages.profile', ['title' => $title, 'user' => $user]);
    }
    
    // public function newRestaurant(){
    //     $title = 'Create your restaurant';
    //     $user = Auth::user();
    //     return view('restaurants.newRestaurant', ['title' => $title, 'user' => $user]);
    // }
}
