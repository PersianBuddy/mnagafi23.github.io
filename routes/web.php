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
            Route::view('سوکت-پردازنده','pages.tutorial.motherboard.components.cpu_socket');
            Route::view('northbridge-چیست','pages.tutorial.motherboard.components.northbridge');
            Route::view('اسلات-رم','pages.tutorial.motherboard.components.memory_slot');
            Route::view('super-io-چیست','pages.tutorial.motherboard.components.sio');
            Route::view('کانکتور-ide','pages.tutorial.motherboard.components.ide_connector');
            Route::view('کانکتور-پاور-فرم-atx','pages.tutorial.motherboard.components.atx_power_connector');
            Route::view('southbridge-چیست','pages.tutorial.motherboard.components.southbridge');
            Route::view('SATA-چیست','pages.tutorial.motherboard.components.sata');
            Route::view('CMOS-چیست','pages.tutorial.motherboard.components.cmos');
            Route::view('RAID-چیست','pages.tutorial.motherboard.components.raid');
            Route::view('کانکتور-پنل-جلو-کیس','pages.tutorial.motherboard.components.front_panel');
        });
    });

});
Route::view('tutorial','pages.tutorial.tutorial');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
