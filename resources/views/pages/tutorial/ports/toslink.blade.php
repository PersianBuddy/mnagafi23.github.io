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
                <h3>پورت Optical Digital Audio یا TOSLINK</h3>
                <p>
                        بیشتر کابل‌های مورد استفاده در دستگاه‌‌های صوتی و تصویری از طریق انتقال <b>سیگنال‌های الکتریکی</b> عمل می‌کنند. در این کابل‌ها، از کابل‌‌های ابتدایی گرفته تا کابل‌های HDMI، از چندین <b>سیم</b> برای انتقال جریان الکتریکی استفاده می‌کنند.
                </p>
                <p>
                        در کابل‌های TOSLINK، برخلاف کابل‌های دیگر به جای سیم‌ از رشته‌های <b>فیبر نوری و لیزر</b> برای انتقال اطلاعات استفاده می‌شود. این نوع کابل‌‌ها برای اولین بار در سال ۱۹۸۳ توسط <b>شرکت توشیبا</b> (Toshiba) عرضه شد به همین دلیل به نام TOSLINK یا Toshiba-Link شناخته می‌شوند.
                </p>
                <img class="img-responsive" alt="کابل Digita Audio Toslink" style="max-width:300px;" src="/images/md/ports/کابل-toslink.jpg">
                <p>
                        پورت TOSLIN یا Optical connector در تجهیزاب صوتی مورد استفاده قرار می‌گیرد. این پورت دارای پوسته‌ای <b>مربع شکل</b> است و نام Digital Audio Output (Optical) یا چیزی شبیه به آن در کنار این پورت نوشته شده است.
                </p>
                <img class="img-responsive" alt="پورت Digita Audio Toslink و Digital Coax" style="max-width:400px;" src="/images/md/ports/پورت-toslink.jpg">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span> برای تشخیص پورت TOSLINK در دستگاه مورد نظر، نیازی به نوشته خاصی نیست. از آنجایی که این پورت با نور لیزر کار می‌کند هنگام روشن بودن سیستم <b>نور قرمز</b> رنگی در محل اتصال پورت کاملاً مشخص می‌باشد. (معمولا این پورت دارای درپوش محافظ است)
                </p>
                <p>
                    <span class="glyphicon glyphicon-zoom-in"></span>پورت TOSLINK از <a href="">صدای <b>۸ کاناله</b></a> (7.1 Channel) نیز پشتیبانی می‌کند.
                </p>
                {{--  related links  --}}
                <div id="related-links">
                    <a href="{{url('tutorial/ports/پورت-COAX')}}">پورت Digital Audio Coax</a>
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection