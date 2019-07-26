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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/positions', 'AdminController@positions')->middleware('auth');

Route::get('/products', 'AdminController@products')->middleware('auth');

Route::get('/sales', 'AdminController@sales')->middleware('auth');

Route::post('/addpositon', 'AdminController@addpositon');

Route::get('/positiondelete/{id}', 'AdminController@deleteposition');
