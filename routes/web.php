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
        Route::view('مادربورد-چیست','pages.tutorial.motherboard.motherboard');
        //motherboard components
        Route::group(['prefix' => 'components'],function(){
            Route::view('اسلات-توسعه','pages.tutorial.motherboard.components.expansion_slots');      
            Route::view('اسلات-agp','pages.tutorial.motherboard.components.agp');
            Route::view('اسلات-pci-express','pages.tutorial.motherboard.components.pci_express');
            Route::view('اسلات-pci','pages.tutorial.motherboard.components.pci');
            Route::view('فن-کیس','pages.tutorial.motherboard.components.case_fan');
            Route::view('پنل-پشت-مادربورد','pages.tutorial.motherboard.components.back_panel');
            Route::view('heat-sink','pages.tutorial.motherboard.components.heat_sink');
            Route::view('کانکتور-p4-پاور','pages.tutorial.motherboard.components.p4_connector');
        });
    });

});
Route::view('tutorial','pages.tutorial.tutorial');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
