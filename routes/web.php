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
Route::resource('tires', 'TireController');
Route::resource('employees', 'EmployeeController');
/*Route::get('/tires/create','TireController@create');
Route::post('/tires','TireController@store');
Route::get('/tires','TireController@index');
Route::get('/tires/{tire}','TireController@show');*/