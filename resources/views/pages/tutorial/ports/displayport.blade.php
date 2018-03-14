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
                <h3>پورت DisplayPort</h3>
                <p>
                        DisplayPort <b>کامل‌ترین</b> خروجی سیگنال‌های <b>آنالوگ و دیجیتال</b> است. و می‌توان آن را به تمام نمایشگر ها (یا وسایل مانند پروژکتور) با پورت‌های <a href="">VGA</a>، <a href="">DVI</a> و <a href="">HDMI</a> متصل کرد. (البته با تبدیل مربوط به هر کدام)
                </p>
                <img class="img-responsive" alt="پورت DisplayPort" style="max-width:300px;" src="/images/md/ports/پورت-displayport.jpg">
                <p>
                        این پورت در <b>دو ورژن</b> عرضه می‌شود:
                </p>
                <ul class="custom-list">
                    <li>
                            <span class="sublist-title">ورژن 1.2 :</span> در این ورژن قابلیت‌های فوق‌العاده زیادی وجود دارد. برخی از آن‌ها عبارتند از: 
                        <ul class="list-number">
                            <div class="row">
                                <div class="col-sm-6">
                                    <li>پشتیبانی از نمایشگر‌های <a href="{{url('tutorial/monitor/رزولوشن-مانیتور-ها')}}">4K</a> با <a href="{{url('tutorial/monitor/نرخ-بروزرسانی-تصاویر')}}">نرخ بروزرسانی تصاویر</a> یا refresh rate برابر با ۶۰ هرتز</li>
                                    <li>پشتیبانی از <a href="">صدای چند کاناله</a></li>
                                    <li>تصاویر 3D </li>
                                </div>
                                <div class="col-sm-6">
                                    <li>پشتیبانی از <a href="{{url('tutorial/monitor/نسبت-تصاویر-مانیتور')}}">نسبت تصویر</a> یا aspect ratio برابر با <b>21:9</b> برای نمایشگر‌های عریض</li>
                                    <li> و انتقال داده‌ها (غیر از داده‌های تصویری) از طریق کانکتور</li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li>
                            <span class="sublist-title">ورژن 1.3 :</span> این ورژن علاوه بر ویژگی‌های بالا، از موارد زیر نیز پشتیبانی می‌کند
                        <ul class="list-number">
                            <div class="row">
                                <div class="col-sm-6">
                                    <li>ارسال <b>چندین جریان خروجی</b> توسط یک کانکتور</li>
                                    <li>پشتیبانی از مانیتور‌های <b>8K</b> با نرخ بروزرسانی تصاویر ۶۰ هرتز</li>
                                </div>
                                <div class="col-sm-6">
                                    <li>پشتیبانی از تصاویر 3D در با <a href="">رزولوشن</a> 4K</li>
                                    <li>استفاده از <b>Adaptive-sync</b> برای کاهش لگ (leg) هنگام اجرای بازی‌ها</li>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
                <p>
                    <span class="glyphicon glyphicon-zoom-in"></span>    کابل DisplayPort دارای <b>دو دندانه</b> برای قفل کردن کابل در محل اتصال می‌باشد.
                </p>
                <img class="img-responsive" alt="کابل DisplayPort" style="max-width:500px;" src="/images/md/ports/کابل-displayport.jpg">
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection