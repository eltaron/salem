<?php

use Illuminate\Support\Facades\Route;

// Admin Routes
Route::group(['namespace'=>'Admin'], function () {
    Route::get("", 'HomeController@index');
    Route::post('login','HomeController@auth');
    Route::group(['middleware' => ['auth']], function() {
        Route::get('dashboard','HomeController@dashbord');
        Route::group(['prefix' => 'products'], function() {
            Route::get('','productController@index');
            Route::get('add','productController@add');
            Route::post('store','productController@store');
            Route::post('delete','productController@delete');
            Route::get('edit/{id}','productController@edit');
            Route::post('edit','productController@update');
            Route::post('deleteImage','productController@deleteImage');
            Route::post('deleteComment','productController@deleteComment');
            Route::get('show/{id}','productController@show');
        });
        Route::group(['prefix' => 'offers'], function() {
            Route::get('','offerController@index');
            Route::post('delete','offerController@delete');
            Route::get('add','offerController@add');
            Route::post('store','offerController@store');
            Route::get('edit/{id}','offerController@edit');
            Route::post('edit','offerController@update');
        });
        Route::group(['prefix' => 'tasks'], function() {
            Route::get('','taskController@index');
            Route::post('delete','taskController@delete');
            Route::post('activate','taskController@activate');
            Route::get('add','taskController@add');
            Route::post('store','taskController@store');
            Route::get('edit/{id}','taskController@edit');
            Route::post('edit','taskController@update');
            Route::get('end','taskController@end');
        });
        Route::group(['prefix' => 'messages'], function() {
            Route::get('','messagesController@index');
            Route::post('delete','messagesController@delete');
        });
        Route::group(['prefix' => 'categories'], function() {
            Route::get('','categoriesController@index');
            Route::post('add','categoriesController@store');
            Route::post('delete','categoriesController@delete');
        });
        Route::get('logout','HomeController@logout');
    });
});
