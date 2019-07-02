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

Route::get( '/',                function () { return view('welcome');   });
Route::get( '/new-car',         function () { return view('newcar');    });
Route::post('/add-new-car',     'CarController@store');
Route::get( '/all-cars',        'CarController@index');

Route::get( '/all-cars/{id}',  function ($id) {
    //
})->where('id', '[0-9]+');