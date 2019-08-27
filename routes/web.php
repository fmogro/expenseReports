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

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/expense-reports', 'ExpenseReportController');
Route::get('/expense-reports/{id}/confirmDelete','ExpenseReportController@confirmDelete');

Route::get('/expense-reports/{expense_report}/expenses/create','ExpenseController@create');
Route::post('/expense-reports/{expense_report}/expenses','ExpenseController@store');
Route::get('/expense-reports/expenses/{expense_report}/edit','ExpenseController@edit');
Route::put('/expense-reports/expenses/{expense_report}','ExpenseController@update');
Route::get('/expense-reports/expenses/{id}/confirmDelete','ExpenseController@confirmDelete');
Route::delete('/expense-reports/expenses/{id}','ExpenseController@destroy');
