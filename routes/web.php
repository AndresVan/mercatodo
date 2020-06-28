<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index');

Route::resource('/admin_users','AdminUserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
