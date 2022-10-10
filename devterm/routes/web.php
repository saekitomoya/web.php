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


    Route::group(['prefix' => 'admin'], function() {
    Route::get('character/create', 'Admin\CharacterController@add')->middleware('auth');
    Route::post('character/create', 'Admin\CharacterController@create')->middleware('auth');
    Route::get('character', 'Admin\CharacterController@index')->middleware('auth');
    Route::get('character/edit', 'Admin\CharacterController@edit')->middleware('auth'); 
    Route::post('character/edit', 'Admin\CharacterController@update')->middleware('auth'); 
    Route::get('character/delete', 'Admin\CharacterController@delete')->middleware('auth');
    Route::get('character/index','Admin\CharacterController@index')->middleware('auth');
    Route::get('character/{id}/show','Admin\CharacterController@show')->middleware('auth');

});
Route::get('character/index','Admin\CharacterController@userIndex')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

