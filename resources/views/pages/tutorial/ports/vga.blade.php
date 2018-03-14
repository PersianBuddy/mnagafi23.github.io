@extends('layouts.app')

@section('title')
انواع اسلات توسعه و تفاوت آن‌ها
@endsection

@section('description')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('includes.tutorial_side_nav')
            </div>
            
            <div class="col-sm-9 page-content">
                <h3>پورت VGA یا D-SUB</h3>
                <p>
                        پورت VGA یا D-SUB  یک خروجی <b>آنالوگ</b> سیگنال ویدیوی است. این پورت برای اتصال مانیتور‌‌های آنالوگ با حداکثر <a href="">رزولوشن</a> <b>2048x1536</b> و <a href="">نرخ بروزرسانی تصاویر</a> یا refresh rate برابر با <b>۸۵ هرتز</b>، به کار می‌رود.
                </p>
                <p>
                        کانکتور VGA دارای <b>۱۵ پین</b> در سه ردیف می‌باشد و مانند پورت <a href="">DVI</a> در دو طرف آن <b>دو پیچ</b> برای محل کردن کابل در محل اتصال وجود دارد.
                </p>
                <img class="img-responsive" alt="پورت VGA یا D-SUB" style="max-width:300px;" src="/images/md/ports/پورت-vga.jpg">
                <p>
                        همانطور که می‌دانید در سیگنال‌های انالوگ جریان‌های الکتریکی مزاحم باعث <b>اختلال در ارسال سیگنال</b> می‌شود بنابراین باید هنگام خرید کابل VGA به کیفیت کابل آن توجه شود. معمولا کابل‌ها با قطر کمتر کیفیت بیشتری دارند و اختلال جریان در آن‌ها کمتر است.
                </p>
                <img class="img-responsive" alt="کابل VGA یا D-SUB" style="max-width:400px;" src="/images/md/ports/کابل-vga.jpg">
                <p>
                        امروزه پورت‌های VGA جای خود را به پورت‌‌های جدید‌تر مانند <a href="">HDMI</a> و <a href="">DisplayPort</a> داده‌اند. (البته هنوز امکان استفاده از این کانکتور‌ها با استفاده از رابط مناسب وجود دارد)
                </p>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection