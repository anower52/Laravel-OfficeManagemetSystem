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


     Route::get('/login','LoginController@index')->name('login');
     Route::get('/login/test','LoginController@test')->name('login');
     Route::post('/login','LoginController@verify')->name('verify');

     Route::get('/login/logout','LoginController@logout')->name('logout');

     Route::get('/home','HomeController@index')->name('home');/*
    Route::get('/home/create','HomeController@create')->name('create');
    Route::post('/home/display/', 'HomeController@posted')->name('display');*/

    Route::get('/department', 'DepartmentController@index')->name('department.list');
    Route::get('/department/create', 'DepartmentController@create')->name('department.create');
    Route::post('/department/create', 'DepartmentController@store')->name('department.store');
    Route::get('/department/edit/{id}', 'DepartmentController@edit')->name('department.edit');
    Route::post('/department/edit/{id}', 'DepartmentController@update')->name('department.update');
    Route::get('/department/delete/{id}', 'DepartmentController@delete')->name('department.delete');
    Route::post('/department/delete/{id}', 'DepartmentController@destroy')->name('department.destroy');

    Route::get('/employee', 'EmployeeController@index')->name('employee.list');
    Route::get('/employee/create', 'EmployeeController@create')->name('employee.create');
    Route::post('/employee/create', 'EmployeeController@store')->name('employee.store');

    Route::get('/', function () {
        return redirect()->route('login');
    });




