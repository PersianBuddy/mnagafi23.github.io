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
                <h3>CMOS</h3>
                <p>
                        <a href="">BIOS</a> برای ارتباط با قطعات سخت‌افزاری، نیاز به اطلاعاتی درباره‌ی آن‌ها دارد و از سوی دیگر تنظیمات برخی قطعات به وسیله بایوس صورت می‌پذیرد. این اطلاعات و تنظیمات در حافظه‌ایی به نام <b>CMOS RAM</b> ذخیره می‌شود. در <a href="">مادربورد</a>‌های جدید مدار CMOS RAM درون <a href="">Northbridge</a> قرار داده شده است.
                </p>
                <h4>باتری CMOS</h4>
                <p>
                    حافظه‌ی CMOS RAM  فرار است و با قطع برق محتویات آن از بین می‌رود. برای رفع این مشکل، یک باطری در مادربورد قرار داده شده تا برق مورد نیاز CMOS RAM و مدار مربوط به <b>ساعت سیستم</b> Real Time Clock یا <b>RTC</b> را در زمان قطع برق تامین کند.
                </p>
                <img class="img-responsive" alt="باتری COMS مادربورد" src="/images/md/motherboard/باتری-cmos-مادربورد.jpg">
                <h4>آیا باطری مادربورد قابل شارژ است؟</h4>
                <p>
                    <b>خیر</b>، اما از آنجا که CMOS RAM مصرف برق بسیار پایینی دارد، باطری مادربورد تا چندین سال (حدود <b>۱۰ سال</b>) کار می‌کند.
                </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection