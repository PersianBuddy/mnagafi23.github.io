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
                <h3>پاور‌های ماژولار</h3>
                <p>
                    در <a href="">پاور‌های معمولی</a> کابل‌های اتصالات داخلی (Molex، ۴-پین، ۲۴ پین) به پاور متصل شده‌اند و امکان جدا کردن آن‌ها وجود ندارد. این موضوع شاید برای برخی کاربران که می‌خواهند درون کیس سیستم‌شان مرتب باشد، آزار دهنده باشد.
                </p>
                <p>
                    برخی پاور‌ها این امکان را فراهم می‌کند تا کاربر بتواند <b>تمام کابل‌های</b> پاور را جدا کند و فقط کابل‌هایی که در سیستم خود نیاز دارد را به پاور متصل کند، به این گونه از پاور‌، پاور ماژولار می‌گویند. 
                </p>
                <img class="img-responsive" alt="منبع تغذیه یا پاور ماژولار" style="max-width:500px;" src="/images/md/power_supply/پاور-ماژولار.jpg">
                <p>
                    <span class="glyphicon glyphicon-alert"></span>پاور ماژولار هیچ گونه <b>برتری در بازده</b> نسبت به پاور‌های معمولی ندارد همچنین در برخی موارد بدلیل ایجاد گرما‌ی اضافی در محل اتصال کابل‌ها به پاور بازده <b>کاهش</b> می‌یابد.
                </p>
                <h4>پاور نیمه ماژولار</h4>
                <p>
                    در پاور‌های نیمه ماژولار، به جز برخی کابل‌های مهم نظیر کابل ۲۴-پین مادربورد و چند کابل ۸-پین بقیه کابل‌ها قابل جدا سازی هستند. همچنین <b>قیمت</b> این نوع پاور نسبت به نوع ماژولار پایین‌تر است.
                </p>
                <img class="img-responsive" alt="منبع تغذیه یا پاور نیمه ماژولار" style="max-width:600px;" src="/images/md/power_supply/پاور-نیمه-ماژولار.jpg">
                {{--  related links  --}}
                <div id="related-links">
                
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection