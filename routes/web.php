<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');































Route::resource('banks', 'BankController');

Route::resource('companies', 'CompanyController');



Route::resource('customers', 'CustomerController');





Route::resource('loans', 'LoanController');

Route::resource('loanDetails', 'LoanDetailController');