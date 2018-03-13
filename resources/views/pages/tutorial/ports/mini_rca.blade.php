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
                 <h3>کانکتور و پورت RCA mini-jack</h3>
                 <p>
                        این کانکتور هم مانند کانکتور <a href="">RCA</a> دارای پوسته‌ی <b>دایره‌ای شکل</b> است. در نوع نری کانکتور RCA mini-jack یک <b>میله‌ی ۲ تا ۳ تکه</b> (بسته به کاربرد آن) می‌باشد که در حفره‌ی مربوط به پورت RCA mini-jack قرار می‌گیرد.
                 </p>
                 <img class="img-responsive" alt="پورت صدای RCA mini-jack" style="max-width:600px;" src="/images/md/ports/پورت-rca-mini-jack.jpg">
                 <h4>رنگ‌های مختلف پورت RCA mini-jack</h4>
                 <p>
                        این کانکتور برای اتصال تجهیزات صوتی به کامپیوتر (یا وسایل مانند گوشی موبایل) مورد استفاده قرار می‌گیرند و بسته به نوع آن در رنگ‌های مختلف طراحی شده‌اند.
                 </p>
                 <ul class="custom-list">
                     <li><span class="sublist-title">رنگ آبی</span> (شکل کنار پورت: پیکان به سمت داخل امواج) می‌باشد و بوسیله‌ی آن می‌توان <b>دستگاه‌‌های خارجی</b> مانند ضبط صوت و دیگر پلیر‌ها را به سیستم متصل کنیم.</li>
                     <li><span class="sublist-title">رنگ صورتی</span> (شکل میکروفن کنار پورت) برای اتصال <b>میکروفن</b> به سیستم استفاده می‌شود. پورت Mic ابتدا سیگنال ورودی را تقویت کرده و سپس آن را وارد سیستم می‌کند.</li>
                     <li><span class="sublist-title">رنگ سبز</span> (شکل کنار پورت: پیکان به سمت بیرون امواج) برای ارسال <b>سیگنال آنالوگ</b> به بلندگو‌های خارجی می‌باشد. </li>
                 </ul>
                 <img class="img-responsive" alt="کابل صدای RCA mini-jack" style="max-width:400px;" src="/images/md/ports/کابل-rca-mini-jack.jpg">
                 
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection