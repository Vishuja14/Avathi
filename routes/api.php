<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'v1'], function () {

    Route::group(['prefix' => 'events'], function () {
     Route::post('/createEvents', 'event\EventController@store');
  });
    Route::post('/createImgObject', 'EOImageController@store');
    Route::post('/registerGuestUserForLogin', 'RegisterUserController@store');
    Route::post('/registerGuestToUserForLogin', 'RegisterUserController@registerGuestToUser');
    Route::post('/verifyOtpForLogin', 'RegisterUserController@verifyOtp');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
