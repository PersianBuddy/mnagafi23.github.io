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
                <h3>پورت HDMI</h3>
                <p>
                        HDMI کوتاه شده‌ی عبارت High Definition Multimedia Interface و یک پورت با پوسته‌ای <b>D شکل</b> می‌باشد که دارای <b>۱۹ پین</b> است. این پورت در تجهیزات صوتی و تصویری مانند تلویزیون‌های HD، پورژکتور‌‌ها و DVD پلیر‌ها کاربرد دارد و در کامپیوتر‌ نیز برای اتصال <b>مانیتور‌های دیجیتال</b> به سیستم مورد استفاده قرار می‌گیرند.
                </p>
                <img class="img-responsive" alt="پورت HDMI" style="max-width:600px" src="/images/md/ports/پورت-hdmi.jpg">
                <h4>ورژن‌های مختلف HDMI</h4>
                <ul class="custom-list">
                    <li><span class="sublist-title">ورژن 1.3 :</span>‌ در سال ۲۰۰۶ عرضه شد و دارای قابلیت‌هایی نظیر افزایش <b>عمق رنگ‌ها</b> (Color Depth) برای وضوح بیشتر تصاویر دور و DTS-HD master Audio برای ایجاد <b>صدا‌های محیطی</b> بهتر، می‌باشد.</li>
                    <li><span class="sublist-title">ورژن 1.4 :</span>‌ این ورژن در سال ۲۰۰۹ و برای پشتیبانی از <b>تصاویر سه‌بعدی</b> معرفی شد.</li>
                    <li><span class="sublist-title">ورژن 2.0 :</span>‌ در سال ۲۰۱۳ معرفی شد و ویژگی‌هایی نظیر پشتیبانی از <b>تصاویر 4K</b> و <b>۳۲ کانال صدا</b> (ارسال ۳۲ صدای متفاوت) و پشتیبانی از مانیتور‌های خیلی بزرگ ( aspect ratio 21 by 9) را دارا می‌باشد.</li>
                </ul>
                <h4>کانکتور‌های مختلف HDMI</h4>
                <ul class="custom-lsit">
                    <img class="img-responsive" alt="کانکتور‌های مختلف HDMI" style="max-width:400px;" src="/images/md/ports/انواع-کانکتور-hdmi.jpg">
                    <li><b>HDMI :</b> نوع متداول در تلویزیون‌ها و رسیور‌ها و مانیتور کامپیوتر‌</li>
                    <li><b>Mini-HDMI :</b> در دوربین‌های فیلم برداری</li>
                    <li><b>Micro-HDMI :‌</b> در موبایل‌ها و وسایل کوچک</li>
                </ul>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection