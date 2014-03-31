<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
Route::get('themes/eternity', ['as'=>'eternity', 'uses'=>'HomeController@eternity']);
Route::get('tour', ['as'=>'get_tour', 'uses'=>'HomeController@get_tour']);
Route::post('tour', ['as'=>'tour', 'uses'=>'HomeController@tour']);
Route::put('tour/put', ['as'=>'put_tour', 'uses'=>'HomeController@put_tour']);