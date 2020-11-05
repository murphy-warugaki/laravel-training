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
    return view('welcome');
});

Route::get("/form/index", "SampleFormController@index");

Route::get("/form/show/{id}", "SampleFormController@show");

Route::post("/form/store", "SampleFormController@store");

Route::post('/form/delete', 'SampleFormController@delete');

Route::post("/form/update", "SampleFormController@update");
