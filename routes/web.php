<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
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

Route::group(['prefix'=> LaravelLocalization::setlocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function()
{
    Route::group(['namespace'=>'App\Http\Controllers\Site'],function(){
        Route::get('login','UserAuthController@login')->middleware('AlreadyLoggedIn');
        Route::get('register','UserAuthController@register')->middleware('AlreadyLoggedIn');
        Route::post('create','UserAuthController@create')->name('auth.create');
        Route::post('check','UserAuthController@check')->name('auth.check');
        Route::get('profile','UserAuthController@profile')->middleware('isLogged');
        Route::get('logout','UserAuthController@logout');


        Route::get('/','UserAuthController@home')->name('user.home');


    });

});












//Route::group(['namespace'=>'App\Http\Controllers\Site'],function(){
//    Route::get('login','UserAuthController@login')->middleware('AlreadyLoggedIn');
//    Route::get('register','UserAuthController@register')->middleware('AlreadyLoggedIn');
//    Route::post('create','UserAuthController@create')->name('auth.create');
//    Route::post('check','UserAuthController@check')->name('auth.check');
//    Route::get('profile','UserAuthController@profile')->middleware('isLogged');
//    Route::get('logout','UserAuthController@logout');
//
//
//
//});
