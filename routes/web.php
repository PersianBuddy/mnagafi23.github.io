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
            Route::view('هدرهای-مادربورد','pages.tutorial.motherboard.components.headers');
            Route::view('جامپر','pages.tutorial.motherboard.components.jumper');
            Route::view('اسلات-ISA','pages.tutorial.motherboard.components.isa_slot');
            Route::view('اسلات-AMR','pages.tutorial.motherboard.components.amr_slot');
            Route::view('اسلات-CNR','pages.tutorial.motherboard.components.cnr_slot');
        });
        //motherboard Form Factors
        Route::group(['prefix' => 'form_factor'],function(){
            Route::view('فرم-فاکتور-ATX','pages.tutorial.motherboard.form_factor.atx');
            Route::view('فرم-فاکتور-mini-ITX','pages.tutorial.motherboard.form_factor.mini_itx');
            Route::view('فرم-فاکتور-BTX','pages.tutorial.motherboard.form_factor.btx');
            Route::view('فرم-فاکتور-NLX','pages.tutorial.motherboard.form_factor.nlx');
        });
    });
    //case
    Route::group(['prefix' => 'case'],function(){
        Route::view('انواع-کیس','pages.tutorial.case.case_types');
        Route::view('مدیریت-کابل-کیس','pages.tutorial.case.case_cable_management');
        Route::view('فیلتر-گرد-خاک-کیس','pages.tutorial.case.case_dust_filter');
        Route::view('کنترل-فن-کیس','pages.tutorial.case.case_fan_controller');
        Route::view('کیس-شفاف','pages.tutorial.case.glass_case');
        Route::view('کیس-ماژولار','pages.tutorial.case.madular_case');
    });
    //Power Suply
    Route::group(['prefix' => 'power_supply'],function(){
        Route::view('پاور','pages.tutorial.power_supply.power_suply');
        Route::view('کانکتور-MOLEX-پاور','pages.tutorial.power_supply.molex_connector');
        Route::view('پاور-ماژولار','pages.tutorial.power_supply.modular_power_supply');
    });
    //other
    Route::group(['prefix' => 'other'],function(){
        Route::view('خنک-کننده-آبی','pages.tutorial.other.water_cooling');
    });

});
Route::view('tutorial','pages.tutorial.tutorial');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
