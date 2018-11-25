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

Route::post('login',array('uses'=>'LoginController@doLogin'));

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/findResults', function () {
    return view('findResults');
});

Route::get('/findProperty', function () {
    return view('findProperty');
});
Route::get('/','ListingController@index')->name('listing');

Auth::routes();

Route::get('/home', 'ListingController@getNewListings')->name('newListings');

Route::get('/findResults','ListingController@requestListings')->name('searchListings');
Route::post('findResults','ListingController@requestListings');
Route::resource('listing','ListingController');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/addproperty', function () {
    return view('addproperty');
});

Route::post('addproperty','ListingController@insert');

Route::get('/editproperty/{listingId}','ListingController@showMyListing')->name('listing');

Route::get('myproperties','ListingController@getUserListings')->name('myListings');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
