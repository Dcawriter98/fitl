<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return view('hello', ['name' => 'Andre M']);
});

Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

//Route::get('contact', 'PageControllerContact@contact');

Route::get('jobrecords/{jobrecord}/edit', 'JobRecordController@edit');
Route::put('jobrecords/{jobrecord}', 'JobRecordController@update');
Route::post('jobrecords/store', 'JobRecordController@store');
Route::get('jobrecords/create', 'JobRecordController@create');
Route::get('jobrecords/{jobrecord}', 'JobRecordController@show');
Route::get('jobrecords', 'JobRecordController@index');