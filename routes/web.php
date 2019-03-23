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



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PersonController@index' );
Route::get('/home/person','PersonController@showperson') ->name('showperson') ;
Route::get('/home/survey','SurveyController@index') ->name('showsurvey') ;
Route::get('/home/addperson','PersonController@create')->name('addperson')  ;
Route::post('/home/showperson','PersonController@store')->name('store')  ;




Route::put('{person}','PersonController@update')->name('update');
Route::get('{person}/edit', 'PersonController@edit')->name('edit');

Route::get('/home/addperson/json-district','PersonController@distrect');

Route::get('/home/addperson/json-location','PersonController@location');




//
//






//Route::resource('Person', 'PersonController');
