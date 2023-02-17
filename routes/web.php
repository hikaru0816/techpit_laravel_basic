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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', 'HelloController@index');

Route::get('/greeting', 'GreetingController@greeting');
Route::post('/greeting/welcome', 'GreetingController@welcome')->name('greeting.welcome');
Route::get('/greeting/hello', 'GreetingController@hello');

Route::get('profile', 'ProfileController@index');
Route::post('profile/confirm', 'ProfileController@confirm')->name('profile.confirm');

Route::get('lot', 'LotController@index');
Route::get('lot/hello', 'LotController@hello');

Route::get('/employees', 'EmployeesController@index')->name('employees');
Route::get('/employees/create', 'EmployeesController@create');
Route::post('/employees/store', 'EmployeesController@store')->name('employees.store');
Route::get('/employees/search', 'EmployeesController@search')->name('employees.search');

Route::get('/reports', 'WorkingReportsController@index')->name('reports');
Route::get('/reports/create', 'WorkingReportsController@create')->name('reports.create');
Route::post('/reports/store', 'WorkingReportsController@store')->name('reports.store');
