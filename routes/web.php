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

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', 'PagesController@index');

//Route::get('/', 'ContactsController@index');

//Route::get('/contacts/create', 'ContactsController@create');

Route::resource('contacts','ContactsController');

//Route::post('/contacts/create', 'ContactsController@store');
Auth::routes();

Route::get('search','ContactsController@search');

