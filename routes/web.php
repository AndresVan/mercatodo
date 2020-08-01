<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->middleware('verified');

Route::resource('/admin_users', 'AdminUserController')->middleware('verified');

Route::resource('/admin_products', 'AdminProductController')->middleware('verified');

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/admin_users/{id}/confirmDelete', 'AdminUserController@confirmDelete');

Route::get('/admin_products/{id}/confirmDelete', 'AdminProductController@confirmDelete');

Route::get('/products', 'HomeProductsController@indexProduct')->middleware('verified');

Route::get('/manage', 'ManageController@index')->middleware('verified');
