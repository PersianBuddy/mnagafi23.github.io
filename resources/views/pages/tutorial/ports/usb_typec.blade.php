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
                <h3>استاندارد USB  Type-C</h3>
                <p>
                        Type-C یک استاندارد برای <a href="">گذرگاه</a> <a href="">USB</a> است. قطعات USB Type-C می‌توانند بازه‌های سرعت متفاوت و توان برق مصرفی متفاوتی داشته باشند.
                </p>
                <img class="img-responsive" alt="پورت USB Type-C" style="max-width:600px;" src="/images/md/ports/پورت-usb-type-c.jpg">
                <p>
                        پورت USB Type-C دارای <b>۲۴ پین</b> می‌باشد که نسبت به پین‌های پورت نوع A (۴ یا ۸ پین) بسیار بیشتر است، که نشان دهنده‌ی قابلیت‌های فراوان اضافه شده به این نوع USB می‌باشد برخی از این قابلیت‌ها عبارتند از:
                </p>
                <img class="img-responsive" alt="کانکتور USB Type-C" style="max-width:200px;" src="/images/md/ports/کانکتور-usb-type-c.jpg">
                <ul class="custom-list">
                    <li>این نوع پورت قابلیت برق‌رسانی با <b>حداقل جریان ۳ آمپر</b> و توان ۶۰ وات به قطعات متصل را دارد.</li>
                    <li>حداکثر جریان در این نوع پورت <b>۵ آمپر</b> و حداکثر توان <b>۱۰۰ وات</b> می‌باشد. با این میزان توان می‌توان باتری یک لپ‌تاپ را شارژ کرد. به همین دلیل در مک بوک‌های جدید امکان شارژ لپ‌تاپ با کانکتور Type-C وجود دارد.</li>
                    <li>کانکتور Type-C قابلیت <b>Reversible</b> دارد، یعنی می‌تواند از هر طرف به پورت متصل شود. </li>
                    <li>در این نوع کانکتور می‌تواند به عنوان <b>ورودی و خروجی</b> جریان برق استفاده کرد. ( برخلاف انواع دیگر USB که برق خود را تنها از سیستم تامین می‌کنند و به سیستم برق‌رسانی نمی‌کنند)</li>
                </ul>
                <p>
                        کانکتور USB Type-C می‌تواند با سرعت‌ها و استاندارد‌های مختلف (مراجعه شود به <a href="">صفحه مربوط پورت USB</a>) ارائه شود. اما نوع از این کانکتور با نام <b>Full Featured</b> با سرعت <a href="">+ Super Speed</a> یعنی <b>۱۰ گیگابایت در ثانیه</b> عرضه می‌شود.
                </p>
                <img class="img-responsive" alt="کابل USB Type-C" style="max-width:400px;" src="/images/md/ports/کابل-usb-type-c.jpg">
                <p>
                    <span class="glyphicon glyphicon-zoom-in"></span>کانکتور USB Type-C با کانکتور <a href="">نوع A</a> کاملا متفاوت است و برای اتصال به این کانکتور باید از یک <b>تبدیل</b> استفاده شود.
                </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection