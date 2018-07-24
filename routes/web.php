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

use \Illuminate\Support\Facades\Route;

Route::get('/admin/product/listEdit', 'ProductController@getListEdit');
Route::post('/admin/product/destroy/{id}', 'ProductController@delete');
Route::resource('admin/product', 'ProductController');

