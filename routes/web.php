<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

// Route::get('/dashboard', 'PagesController@dashboard')->middleware('auth', 'checkOwnsRestaurant');

// Route::get('/results', 'PagesController@results');

Route::post('/results', 'PagesController@results');

Route::get('/profile', 'PagesController@profile')->middleware('auth');

Route::get('/newrestaurant', 'RestaurantsController@create')->middleware('auth');

Auth::routes();

Route::resource('restaurants', 'RestaurantsController');

Route::resource('bookings', 'BookingsController');

Route::post('/restaurant/{restaurant}', 'RestaurantsController@updateAvailability');
