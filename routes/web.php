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

Route::get('/welcome', function () {
    return "Welcome home";
});

//pages controller
//home page
Route::get('/', 'PagesController@index');
//tutorial
//motherboard
//first page
Route::get('/tutorial/motherboard/basics','PagesController@motherboard');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
