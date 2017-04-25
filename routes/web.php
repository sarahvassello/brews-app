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

Route::get('beers', 'BeerController@index');
Route::post('beers', 'BeerController@create');
Route::get('beers/{id}', 'BeerController@show');
Route::put('beers/{id}', 'BeerController@update');
Route::delete('beers/{id}', 'BeerController@destroy');
Route::get('/style',  function () {
    return view('style');
});
