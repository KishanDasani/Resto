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

// Route::get('/', function () {
//     return view('welcome');
// });

//home page route
Route::get('/','RestoController@index');

// route for list of restaurants
Route::get('/list','RestoController@list');

//route for showing the add restaurant form
Route::view('/add','add');

// route for add page
Route::post('/add','RestoController@add');

// route for delete page
Route::get('/delete/{id}','RestoController@delete');

// route for edit restaurant page
Route::get('/edit/{id}','RestoController@edit');

// route for updating the product
Route::post('/update','RestoController@update');

// route for registration form view
Route::view('/register','register');

// route for registering the user
Route::post('/register','RestoController@register');