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
                 <h3>خروجی صدای چند کاناله</h3>
                 <p>
                        برخی از انواع <a href="">کارت‌های صدا</a> بگونه‌ای طراحی شده‌اند تا بتوانند مجموعه‌ای از <b>چند <a href="">بلندگو</a></b> را پشتیبانی کنند به این روش، روش خروجی چند کاناله می‌گویند که امکان ایجاد صدا‌های محیطی (surround back speakers) یا صدا‌های سه بعدی (3D sound) را فراهم می‌کند.
                 </p>
                 <img class="img-responsive" alt="نحوه چینش بلندگو‌ها در روش ۸ کاناله" style="max-width:600px;" src="/images/md/sound/چینش-۸-کاناله-بلندگوها.jpg">
                 <h4>خروجی صدای ۶ کاناله</h4>
                 <p>
                        در روش صدای ۶ کاناله یا <b>5.1  channel surround</b> صدا روی ۶ کانال مختلف برای ایجاد صدا‌های محیطی ارائه می‌شود. یعنی <b>شش صدای مختلف</b> به بلند‌گو‌ها ارسال میشود. از این شش کانال ۲ کانال برای دو بلندگو در <b>پشت</b> کاربر (surround back) ، ۲ کانال برای دو بلندگوی <b>جلوی</b> کاربر (front speaker)، یک کانال برای پخش <b>صدای بم</b> (subwoofer speaker) و یک کانال برای بلندگویی که در <b>مقابل کاربر</b> قرار می‌گیرد، وجود دارد.
                 </p>
                 <img class="img-responsive" alt="کارت صدا با خروجی ۶ کاناله" style="max-width:600px;" src="/images/md/sound/کارت-صدای-۶-کاناله.jpg">
                 <p>
                        کارت‌های صوت ۶ کاناله دارای<b> ۳ پورت</b> از نوع RCA mini-jack برای این شش کانال می‌باشند. که عبارت اند از:
                 </p>
                 <ul class="custom-list">
                    <li>خروجی <b>center/subwoofer</b> برای بلندگو‌ی مقابل کاربر و بلندگوی صدای بم</li>
                    <li>خروجی <b>front left/right</b> برای بلندگو‌های جلویی</li>
                    <li>خروجی <b>surround back left/right</b> برای اتصال به بلند‌گو‌های پشتی</li>
                 </ul>
                 <h4>خروجی صدای ۸ کاناله</h4>
                 <p>
                        در روش صدای ۸ کاناله یا <b>7.1 channel surround</b> که برای ایجاد <b>صدا‌های سه‌بعدی</b> استفاده می‌شود علاوه بر ۶ کانال قبلی دو کانال دیگر نیز برای بلندگو‌هایی در طرفین تعبیه شده است. در کارت‌های صدای ۸ کاناله یک پورت دیگر surround left/right نیز به پورت‌های کارت صدا اضافه شده است.
                 </p>
                 <img class="img-responsive" alt="کارت صدا با خروجی ۸ کاناله" style="max-width:600px;" src="/images/md/sound/کارت-صدای-۸-کاناله.jpg">
                 <p>
                    <span class="glyphicon glyphicon-info-sign"></span>برای پیاده‌سازی صدای ۶ یا ۸ کاناله علاوه بر کارت صوت، اسپیکر نیز باید از آن‌ها پشتیبانی کند.
                 </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection