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


//Customers

//Products

//Categories
Route::get('categories','CategoriesController@index');
Route::get('categories/create','CategoriesController@create');
Route::post('categories','CategoriesController@store');
Route::get('categories/edit/{category}','CategoriesController@edit');
Route::put('categories/{category}','CategoriesController@update');
Route::post('categories/destroy/{category}','CategoriesController@destroy');

//Customers
Route::get('customers','CustomersController@index');
Route::get('customers/create','CustomersController@create');
Route::post('customers','CustomersController@store');
Route::get('customers/edit/{customer}','CustomersController@edit');
Route::put('customers/{customer}','CustomersController@update');
Route::post('customers/destroy/{customer}','CustomersController@destroy');

//Profiles

//Users

Auth::routes();

Route::get('home', 'HomeController@index');
