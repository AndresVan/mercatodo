<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index');

Route::resource('/admin_users','AdminUserController');