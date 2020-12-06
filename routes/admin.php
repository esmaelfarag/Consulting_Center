<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

define('PAGINATION_COUNT',10);

Route::group(['prefix'=> LaravelLocalization::setlocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function()
{
    Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix'=>'admin'],function(){

        Route::get('login','AdminAuthController@login')->middleware('adminAlreadyLoggedIn');
        Route::post('check','AdminAuthController@check')->name('auth.admin.check');
        Route::get('dashboard','AdminAuthController@dashboard')->name('admin.dashboard')->middleware('adminIsLogged');
        Route::get('logout','AdminAuthController@logout')->name('admin.logout');


    });

});


