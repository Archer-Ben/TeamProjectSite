<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Restaurant;
use App\User;
use App\TableAvailability;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create your restaurant';
        $user = Auth::user();
        return view('restaurants.createRestaurant', [
            'title' => $title, 
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $restaurant = new Restaurant;
        $restaurant->name = $request->input('name');
        $restaurant->description = $request->input('description');
        $restaurant->location = $request->input('location');
        $restaurant->latitude = 52.804796;
        $restaurant->longitude = -1.648510;
        $restaurant->phone_number = $request->input('phoneNumber');
        $restaurant->max_table_size = $request->input('maxTableSize');
        $restaurant->user_id = $user->id;
        $restaurant->save();
        
        $availability = new TableAvailability;
        $availability->restaurant_id = $restaurant->id;
        $availability->save();

        $user->openRestaurant();
        $user->save();
        return $this->show($user->id);
        // return redirect('/restaurant/')->with('success', 'Restaurant created. Welcome to your dashboard. From here you can control the number of tables that you want to advertise.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Dashboard';
        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $id)->firstOrFail();
        $availability = TableAvailability::where('restaurant_id', $restaurant->id)->firstOrFail();
        $availabilityArray = json_decode($availability);
        return view('restaurants.dashboard', [
            'title' => $title, 
            'user' => $user, 
            'restaurant' => $restaurant,
            'availability' => $availability,
            'availabilityArray' => $availabilityArray
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $id)->firstOrFail();
        $availabilities = TableAvailability::where('restaurant_id', $restaurant->id)->firstOrFail();
        $restaurant->delete();
        $availabilities->delete();
        $user->destroyRestaurant();
        $user->save();

        return redirect('/profile')->with('success', 'Restaurant deleted.');
    }

    public function updateAvailability(Request $request, $id)
    {
        $availability = TableAvailability::where('restaurant_id', $id)->firstOrFail();
        $availability->size_1 = $request->input('size_1');
        $availability->size_2 = $request->input('size_2');
        $availability->size_3 = $request->input('size_3');
        $availability->size_4 = $request->input('size_4');
        $availability->size_5 = $request->input('size_5');
        $availability->size_6 = $request->input('size_6');
        $availability->size_7 = $request->input('size_7');
        $availability->size_8 = $request->input('size_8');
        $availability->size_9 = $request->input('size_9');
        $availability->size_10 = $request->input('size_10');
        $availability->size_11 = $request->input('size_11');
        $availability->size_12 = $request->input('size_12');
        $availability->size_13 = $request->input('size_13');
        $availability->size_14 = $request->input('size_14');
        $availability->size_15 = $request->input('size_15');
        $availability->size_16 = $request->input('size_16');
        $availability->size_17 = $request->input('size_17');
        $availability->size_18 = $request->input('size_18');
        $availability->size_19 = $request->input('size_19');
        $availability->size_20 = $request->input('size_20');
        $availability->save();

        $user = Auth::user();
        return $this->show($user->id);
    }
}
