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
                <h3>نسبت تصاویر (Aspect Ratio)</h3>
                <img class="img-responsive" alt="مقایسه نسبت تصویر 4:3 و 16:9" style="max-width:500px;" src="/images/md/monitor/مقایسه-نسبت-تصویر.jpg">
                <p>
                        نسبت <b>طول</b> (پهنای) یک تصویر به <b>عرض</b> (ارتفاع) آن را نسبت تصویر یا Aspect Ratio می‌نامند. نمایشگر‌ها و ویدیو‌های مختلف در نسبت‌های تصاویر متفاوت و برای کاربرد‌های مختلف عرضه می‌شوند. در زیر محبوترین انواع نسبت تصاویر (Aspect Ratio) همراه با کاربرد آن‌ها آورده شده است.
                </p>
                <ul class="custom-list">
                    <li><span class="sublist-title">4:3 :</span> این نسبت برای اولین بار در <b>تلویزیون‌های قدیمی</b> (تلویزیون‌ها با لامپ تصویر) عرضه شد و ده‌ها سال کاربرد داشت همچنین از این نسبت تصویر در مانیتور‌های CRT نیز استفاده می‌شود.</li>
                    <li><span class="sublist-title">16:9 :‌</span> <b>محبوب‌ترین نسبت تصویر</b> در مانیتور‌ها و تلویزیون‌های HD امروزه می‌باشد. در <b>بیشتر <a href="">رزولوشن‌ها</a></b> از این نسبت تصویر استفاده می‌شود. بیشتر سایت‌‌های نمایش ویدیو (مانند YouTube،  Hulu و Netflix) از این نسبت استفاده می‌کنند. همچنین این نسبت تصویر (Aspect Ratio) محبوب‌ترین نوع برای استفاده <b>گیمیر‌ها</b> می‌باشد.</li>
                    <li><span class="sublist-title">21:9 Ultra Wider :</span> این نسبت تصویر در <b>نمایشگر‌های عریض</b> بکار می‌رود و مناسب گیمر‌های حرفه‌ای می‌باشد. امروزه بیشتر بازی‌ها (ماشین‌سواری، ماجراجویی) از این نوع نسبت تصویر پشتیبانی می‌کنند.</li>
                </ul>
                <p>
                    <span class="glyphicon glyphicon-zoom-in"></span>نسبت‌های تصویر دیگر نیز بسته به نیاز کاربر وجود دارد. برای نمونه در وسایل <b>واقعیت مجازی</b> (VR) معمولا از نسبت تصویر <b>16:10</b> پشتیبانی می‌کنند و برای کاربر امکان مشاهده‌ی محیط عریض‌تر و گسترده‌تری را فراهم می‌کند.
                </p>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection