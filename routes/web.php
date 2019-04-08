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

Route::get('/','DashController@index');
//route Admin
Route::get('/admin','HomeController@index');
Route::get('/login', 'HomeController@login');
Route::post('/loginPost', 'HomeController@loginPost');
Route::get('/register', 'HomeController@register');
Route::post('/registerPost', 'HomeController@registerPost');
Route::get('/logout', 'HomeController@logout');
Route::get('/admin/tambah','HomeController@tambah');
Route::post('/admin/store','HomeController@store');
Route::get('/admin/edit/{idItem}','HomeController@edit');
Route::post('/admin/update','HomeController@update');
Route::get('/admin/hapus/{idItem}','HomeController@hapus');
Route::get('/logout','HomeController@logout');

//route dashboard
Route::get('/','DashController@index');
Route::get('/item','DashController@item');
Route::get('/item/order/{idItem}','DashController@order');
Route::post('/item/addCustomer','DashController@addCustomer');
Route::get('/item/next','DashController@next');
Route::post('/item/addOrder','DashController@addOrder');