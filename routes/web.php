<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('/', function () {
//    return view('welcome');
//});


Route::group([ 'namespace' => '\App\Http\Controllers'], function () {

});

Route::group([ 'Middleware' => 'cors'], function () {
    Route::get('auth/{provider}', '\App\Http\Controllers\Auth\ApiAuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', '\App\Http\Controllers\Auth\ApiAuthController@callback')->where('provider', '.*');

});

//Route::get('/auth/{provider}', function ($provider) {
//    return \Laravel\Socialite\Facades\Socialite::driver($provider)->redirect();
//});
//
//Route::get('auth/{provider}/callback', function ($provider) {
//
//dd($user);
//    // $user->token
//});
Route::get('/{any}', function () {
    return view('vue');
})->where('any', '^(?!api).*$');
