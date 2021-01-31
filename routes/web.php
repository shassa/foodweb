<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.master');
});
Route::get('/products','productsController@index');

// creat routs
Route::get('/products/create','productsController@create');
Route::post('/products','productsController@store');
///edit
Route::get('/products/{id}/edite','productsController@edite');
Route::put('/products/{id}','productsController@update');
//delete
Route::delete('/products/{id}','productsController@destroy');

////################# categories#########

Route::get('/categories','categoriesController@index');
// creat routs
Route::get('/categories/create','categoriesController@create');
Route::post('/categories','categoriesController@store');
///edit
Route::get('/categories/{id}/edite','categoriesController@edite');
Route::put('/categories/{id}','categoriesController@update');
//delete
Route::delete('/categories/{id}','categoriesController@destroy');
//////select
Route::get('/products/{id}','categoriesController@select');

##############user############
// creat routs
Route::get('/regist','usersControlle@create');
Route::post('/regist','usersControlle@store');
//log in
Route::get('/login','usersControlle@open');
Route::post('/login','usersControlle@check');
################contect################

Route::get('/contacts','contactsController@index');
// creat routs
Route::get('/contacts/create','contactsController@create');
Route::post('/contacts','contactsController@store');
//delete
Route::delete('/contacts/{id}','contactsController@destroy');
###############orders###############

Route::get('/orders','ordersController@index');
// creat routs
Route::get('/orders/create/{id}','ordersController@create');
Route::post('/orders','ordersController@store');
Route::delete('/orders/{id}','ordersController@destroy');


