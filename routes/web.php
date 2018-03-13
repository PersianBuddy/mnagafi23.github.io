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
    //Sound
    Route::group(['prefix' => 'sound'],function(){
        Route::view('کارت-صدا','pages.tutorial.sound.sound_card');
        Route::view('خروجی-صدای-چند-کاناله','pages.tutorial.sound.multi_channel_sound');
    });
    //ports
    Route::group(['prefix' => 'ports'],function(){
        Route::view('پورت-MIDI','pages.tutorial.ports.midi_port');
        Route::view('پورت-Firewire','pages.tutorial.ports.firewire');
        Route::view('پورت-RJ-45','pages.tutorial.ports.rj45');
        Route::view('پورت-RJ-11','pages.tutorial.ports.rj11');
        Route::view('مقایسه-پورت-های-USB','pages.tutorial.ports.usb');
        Route::view('استاندارد-USB-Type-C','pages.tutorial.ports.usb_typec');
        Route::view('پورت-PS-2','pages.tutorial.ports.ps2');
        Route::view('مقایسه-پورت-PS/2-و-USB','pages.tutorial.ports.ps2_vs_usb');
        Route::view('پورت-HDMI','pages.tutorial.ports.hdmi');
        Route::view('پورت-RCA','pages.tutorial.ports.rca');
        Route::view('پورت-RCA-mini-jack','pages.tutorial.ports.mini_rca');
    });
    //internet
    Route::group(['prefix' => 'internet'],function(){
        Route::view('کارت-مودم','pages.tutorial.internet.modem_card');
        Route::view('کارت-شبکه','pages.tutorial.internet.network_card');
    });
    //Graphic Card
    Route::group(['prefix' => 'graphic'],function(){
        Route::view('کارت-گرافیک','pages.tutorial.graphic.graphic_card');
        Route::view('فناوری-SLI','pages.tutorial.graphic.sli');
        Route::view('فناوری-CrossFire','pages.tutorial.graphic.crossfire');
    });
    //CPU
    Route::group(['prefix' => 'cpu'],function(){
        Route::view('پردازنده-چیست','pages.tutorial.cpu.cpu');
        Route::view('پردازنده-۳۲بیت-۶۴بیت','pages.tutorial.cpu.32vs64_bit_cpu');
        Route::view('حافظه-Cache-پردازنده','pages.tutorial.cpu.cpu_cache');
        Route::view('پردازنده-چند-رشته','pages.tutorial.cpu.hyper_threading');
        Route::view('پردازنده-چند-هسته‌ای','pages.tutorial.cpu.cpu_cores');
        Route::view('فرکانس-پردازنده','pages.tutorial.cpu.cpu_clock_speed');
        Route::view('فرکانس-boost-پردازنده','pages.tutorial.cpu.turbo_boost');
        Route::view('مقایسه-پردازنده-های-core-i-اینتل','pages.tutorial.cpu.cpu_corei');
    });
    //other
    Route::group(['prefix' => 'other'],function(){
        Route::view('خنک-کننده-آبی','pages.tutorial.other.water_cooling');
        Route::view('اینترفیس-SCSI','pages.tutorial.other.scsi');
        Route::view('bus-چیست','pages.tutorial.other.bus');
    });

});
Route::view('tutorial','pages.tutorial.tutorial');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
