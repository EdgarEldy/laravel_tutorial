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
    return view('home/index');
});

Route::get('orders', function()
{

});

Route::get('customers', function()
{

});

Route::get('products', function()
{

});

Route::get('categories', function()
{

});

Route::get('profiles', function()
{

});

Route::get('users', function()
{

});
