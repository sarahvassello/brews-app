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

Route::get('/', function () {
    return view('app');
});

Route::get('brews', 'BeerController@index');
Route::post('brews', 'BeerController@create');
Route::get('brews/{id}', 'BeerController@show');
Route::put('brews/{id}', 'BeerController@update');
Route::delete('brews/{id}', 'BeerController@destroy');
