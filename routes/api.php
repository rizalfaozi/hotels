<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('auth/regpemilik', 'UserController@registerPemilik');
Route::post('auth/regpengguna', 'UserController@registerPengguna');

Route::post('auth/login', 'UserController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
   // Route::get('user', 'UserController@getAuthUser');
	//Pemilik
    Route::get('rooms', 'RoomsController@index');
    Route::post('rooms/insert', 'RoomsController@store');
    Route::post('rooms/update/{id}', 'RoomsController@update');
    Route::delete('rooms/destroy/{id}', 'RoomsController@destroy');

    
    //kridit chat
    Route::get('credits', 'CreditsController@index');
    Route::post('credits/chat', 'CreditsController@store');

});


//pengguna
    Route::get('hotels', 'HotelsController@index');
    Route::post('hotels/search', 'HotelsController@search');
    Route::post('hotels/filter', 'HotelsController@filterattribut');

