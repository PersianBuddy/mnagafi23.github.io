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
                <h3>پورت DVI</h3>
                <p>
                    DVI کوتاه شده‌ی عبارت <b>Digital Visual Interface</b> می‌باشد و یک خروجی <b>دیجیتال و آنالوگ</b> ویدیویی است که برای اتصال به مانیتور‌های LCD و پروژکتور‌ها طراحی شده و با یک رابط، به CRT نیز قابل اتصال است. این کانکتور مانند <a href="">HDMI</a> قابلیت <b>انتقال صدا</b> را دارد، اگرچه HDMI نسبت به DVI محبوب‌تر است.
                </p>
                <img class="img-responsive" alt="پورت DVI" style="max-width:400px;" src="/images/md/ports/پورت-dvi.jpg">
                <p>
                        از پورت می‌توان در تمام مانیتور‌های (به وسیله‌ی رابط) <a href="">VGA</a> و HDMI با حداکثر <a href="">رزولوشن</a> <b>1920x1200</b> و حداکثر <a href="">نرخ بروزرسانی تصاویر</a> (refresh rate) <b>۶۰ هرتز</b> استفاده کرد.
                </p>
                <p>
                        <b>سه نوع پورت</b> DVI وجود دارد که اندازه و پوسته‌ی تمامی آن‌ها یکسان است  ولی تعداد پین‌های متفاوت دارند.
                </p>
                <img class="img-responsive" alt="انواع پورت‌های DVI" style="max-width:500px;" src="/images/md/ports/انواع-پورت-های-dvi.jpg">
                <ul class="custom-list">
                    <li><span class="sublist-title">DVI-A :‌</span> این پورت تنها خروجی آنالوگ دارد و کانکتور آن دارای <b>۱۶ پین</b> می‌باشد. (برای اتصال به وسایل <b>آنالوگ</b>)</li>
                    <li><span class="sublist-title">DVI-D :‌</span> تنها خروجی <b>دیجیتال</b> دارد و نمی‌توان آن را با یک رابط به مانیتور‌های آنالوگ متصل نمود. این پورت از کانکتور DVI-D که دارای<b> ۲۴ پین</b> است، استفاده می‌کند.</li>
                    <li><span class="sublist-title">DVI-I :</span>هم خروجی <b>دیجیتال</b> و هم خروجی <b>آنالوگ</b> دارد و قابل اتصال به همه‌ی انواع مانیتور‌ها می‌باشد. این پورت از کانکتوری با <b>۲۸ پین</b> استفاده می‌کند.</li>
                </ul>
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>همانطور که در تصویر بالا مشاهده می‌کنید در کابل‌های DVI که سیگنال‌های دیجیتال را پشتیبانی می‌کنند(نوع DVI-D و DVI-I)، <b>شش پین اضافی</b> وجود دارد که این امکان را مهیا می‌کند تا کابل در حالت <b>Dual Link</b> عمل کند. این حالت امکان پشتیبانی از رزولوشن <b>2560x1600</b> با نرخ بروزرسانی تصاویر <b>۶۰ هرتز</b> را برای کانکتور و کابل DVI فراهم می‌کند.
                </p>
                <p>
                        کانکتور DVI مانند کانکتور VGA در طرف دو پیچ برای محل کردن آن در محل اتصال می‌باشد.
                </p>
                <img class="img-responsive" alt="کابل پورت DVI-D" style="max-width:400px;" src="/images/md/ports/کابل-dvi.jpg">
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection