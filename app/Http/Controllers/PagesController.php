<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Table5';
        return view('pages.index')->with('title', $title);
    }

    public function dashboard(){
        $title = 'Dashboard';
        return view('pages.dashboard')->with('title', $title);
    }

    public function results(){
        $title = 'Results';
        return view('pages.results')->with('title', $title);
    }
}
