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

Route::get("sample", "SampleController@index");

Route::get("/select", "SampleController@select");

Route::get("/select_many", "SampleController@selectMany");

Route::get("/insert", "SampleController@insert");

Route::get("/delete", "SampleController@delete");

Route::get("/update", "SampleController@update");

Route::get("/form/index", "SampleFormController@index");

Route::get("/form/show/{id}", "SampleFormController@show");

Route::post("/form/store", "SampleFormController@store");

Route::post('/form/delete', 'SampleFormController@delete');