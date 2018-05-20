<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



















Route::resource('bancs', 'BancController');







Route::resource('companies', 'CompanyController');

Route::resource('customers', 'CustomerController');