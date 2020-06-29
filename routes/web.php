<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->middleware('verified');

Route::resource('/admin_users','AdminUserController')->middleware('verified');

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/admin_users/{id}/confirmDelete','AdminUserController@confirmDelete');

Route::get('/admin_users/{id}/privileges','AdminUserController@privileges');
