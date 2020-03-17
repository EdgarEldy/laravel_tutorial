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
//Register a route

//Route::get('/',function (){
//   return view('home');
//});

//Home
Route::get('/','HomeController@index');

//Orders
Route::get('orders','OrdersController@index');
Route::get('orders/create','OrdersController@create');

//Customers

//Products

//Categories
Route::get('categories','CategoriesController@index');
Route::get('categories/create','CategoriesController@create');
Route::post('categories','CategoriesController@store');
Route::get('categories/edit/{category}','CategoriesController@edit');
Route::put('categories/{category}','CategoriesController@update');
Route::post('categories/destroy/{category}','CategoriesController@destroy');
//Profiles

//Users

//Auth::routes();


