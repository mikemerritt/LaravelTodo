<?php

// Dashboard and login/logout routes
Route::get('/', 'DashboardController@index');
Route::get('login', 'DashboardController@login');
Route::post('login', 'DashboardController@processLogin');
Route::get('logout', 'DashboardController@logout');

// User Resource
Route::resource('user', 'UserController');

// List Resource
Route::resource('list', 'ListController');