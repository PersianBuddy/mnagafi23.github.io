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
Route::group(['prefix' => 'tutorial'],function(){
    //motherboard
    Route::group(['prefix' => 'motherboard'] ,function(){
        Route::view('basics','pages.tutorial.motherboard.motherboard');
        //components
        Route::group(['prefix' => 'components'],function(){
            //expansion slots
            Route::view('expansion-slots','pages.tutorial.motherboard.components.expansion_slots');      
            //agp slot
            Route::view('agp','pages.tutorial.motherboard.components.agp');
            Route::view('pci-express','pages.tutorial.motherboard.components.pci_express');
        });
    });

});
Route::view('tutorial','pages.tutorial.tutorial');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
