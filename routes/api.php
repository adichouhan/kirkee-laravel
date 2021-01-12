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

// Auth Endpoints

Route::group(['namespace' => '\App\Http\Controllers'], function() {
    Route::post('login', 'Auth\ApiAuthController@login');
    Route::post('register', 'Auth\ApiAuthController@register');
    Route::post('user/update/{id}', 'Auth\UserController@update');


    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'Auth\UserController@index');
        Route::get('/getUser/{id}', 'Auth\UserController@getUser');
        Route::delete('{id}/delete', 'Auth\UserController@delete');
    });


//    Route::post('register', function (){
//        dd('asdf');
//    });
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

