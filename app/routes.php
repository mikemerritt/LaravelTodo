<?php

// Dashboard and login/logout routes
Route::get('/', 'DashboardController@index');
Route::get('login', 'DashboardController@login');
Route::post('login', 'DashboardController@processLogin');
Route::get('logout', 'DashboardController@logout');

// User Resource
Route::resource('user', 'UserController');

// Todo Resource
Route::resource('todo', 'TodoController');

// Item Resource
Route::resource('item', 'ItemController');