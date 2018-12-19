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

Route::GET('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'posts'], function (){

    Route::GET('/{slug}', 'PostController@show');
    Route::GET('/', 'PostController@index')->name('posts');

});

Route::group(['middleware' => 'auth'], function (){

    Route::GET('user-dash', 'DashboardController@index');
    Route::GET('/new-post', 'PostController@create');
//    Route::GET('/logout', 'DashboardController@logoutUser')->name('logout');

});

Auth::routes();

