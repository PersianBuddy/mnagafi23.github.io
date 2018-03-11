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
                <h3>مقایسه پردازنده‌های ۳۲ بیتی و ۶۴ بیتی</h3>
                <p>
                        درمعماری کامپیوتر، اصطلاح ۶۴ بیت و ۳۲ بیت معمولا به <a href="">پردازنده</a> اشاره دارد. عدد ۶۴ و۳۲ به <b>تعداد بیت‌هایی</b> که پردازنده در هر لحظه می‌تواند پردازش کند (یا انتقال دهد)، مربوط می‌باشد.
                </p>
                <img class="img-responsive" alt="مقایسه پردازنده‌های ۳۲ بیتی و ۶۴ بیتی" style="max-width:600px;" src="/images/md/cpu/مقایسه-پردازنده-۳۲بیتی-۶۴بیتی.png">
                <p>
                        به عبارت دیگر پردازنده ۶۴ بیتی می‌تواند در هر ثانیه <b>دو به توان ۳۲</b> مقدار محاسباتی را ذخیره کند و یا در حافظه آدرس‌دهی کند یا به عبارت دیگر پردازنده‌های ۳۲ بیتی قادر به آدرس دهی حداکثر ۴ گیگابایت از حافظه <a href="">رم</a> هستند. و CPU‌های ۶۴ بیتی قابلیت پردازش <b>دو به توان ۶۴</b> عملیات یا ۱۶ میلیارد گیگابایت (<b>چهار میلیون برابر</b> نسخه ۳۲ بیت) در هر ثانیه را دارا می‌باشند.
                </p>
                <h4>مزایای پردازنده‌ی ۶۴ بیت</h4>
                <p>
                        پردازنده‌های ۳۲ بیت قابلیت پشتیبانی حداکثر ۴ گیگابایت رم را دارند. اما پردازنده‌های ۶۴ بیت تا <b>۱۶.۸ ترابایت رم</b> را پشتیبانی می‌کنند. پس صورت نیاز به بیش از <b>۴ گیگابایت</b> رم باید از پردازنده‌‌های ۶۴ بیت استفاده شود.
                </p>
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>پردازنده‌های ۶۴ بیت <b>سرعت سیستم</b> را افزایش نمی‌دهند (البته ممکن است ویژگی‌های دیگر پردازنده باعث افزایش سرعت سیستم شود) و فقط حداکثر مقدرا رم پشتیبانی شده را افزایش می‌دهند.
                </p>
                <p>
                        برای استفاده از مزایای پردازنده‌های ۶۴ بیت باید نوع <b>ویندوز نصب شده</b> بروی سیستم نیز ۶۴ بیت (X64) باشد وگرنه مانند ۳۲ بیت (X32) عمل می‌کند. همچنین در سیستم‌های ۶۴ بیت برای درایور‌های سخت‌افزار‌‌های سیستم باید نسخه‌ها‌ی ۶۴ بیت نصب شود.
                </p>
                {{--  related links  --}}
                <div id="related-links">
                    
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection