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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function(){
    Route::resource('/airports',  'AirportController');
});

//Route::resource('/airports',  'AirportController');



Route::resource('/flights', \FlightController::class, [
    'except' => ['create', 'edit']
]);


//Route::get('/test', function(){
//
//    return response()->json([
//        'user' => [
//        'f_name' => "Rosanna",
//        'l_name' => "Rahmani"
//            ]
//    ]);
//});