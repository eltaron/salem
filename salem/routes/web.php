<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
Route::group(['namespace'=>'Web'], function () {

    Route::get('/', function () {
        Artisan::call('cache:clear');
        return redirect(url('home'));
    });
    Route::get('admin','HomeController@admin');
    Route::get('home','HomeController@index');
    Route::get('offer','HomeController@offer');
    Route::get('products','HomeController@products');
    Route::get('products/{id}','HomeController@showProduct');
    Route::post('contact','HomeController@contact');
    Route::get('about','HomeController@about');
    Route::post('comment','HomeController@comment');
    Route::get('showProducts/{id}','HomeController@showProducts');
    Route::get('CategoryProducts/{id}','HomeController@CategoryProducts');
});
