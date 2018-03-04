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
                <h3>فرم فاکتور mini-ITX</h3>
                <p>
                    برخلاف فرم فاکتور‌های <a href="">ATX</a> که توسط کمپانی <a href="">اینتل</a> طراحی شده‌اند، Mini ITX توسط شرکت <b>VIA Technologies</b> طراحی و عرضه شده است. Mini ITX را می‌توان نمونه <b>کوچکتر</b> فرم فاکتور ATX نامید، که برای سیستم‌های <b>کم قدرت و کوچک</b> عرضه استفاده می‌شود. 
                </p>
                <p>
                    این نوع <a href="">مادربورد</a> دارای یک <a href="">اسلات توسعه</a> (اسلات دوگانه را نیز پشتیبانی می‌کند.) و دو اسلات <a href="">مموری</a> (حداکثر <b>۱۶ گیگابایت</b>) می‌باشد. همچنین <a href="">پردازنده</a>‌‌های نوع <a href="">Quad-core</a> را نیز پشتیبانی می‌کند. ابعاد این فرم فاکتور <b>۱۷۰ در ۱۷۰</b> میلی‌متر است.
                </p>
                <h5>انواع کوچکتر فرم فاکتور ITX شامل موارد زیر می‌باشد.</h5>
                <ul class="custom-list">
                    <li>Nano-ITX با اندازه‌ی ۱۲۰ در ۱۲۰ میلی‌متر</li>
                    <li>Pico-ITX با اندازه‌ی ۱۰۰ در ۷۴ میلی‌متر</li>
                    <li>Mobile-ITX با اندازه‌ی ۶۰ در ۶۰ میلی‌متر</li>
                </ul>
                <img class="img-responsive" alt="انواع فرم فاکتور ITX" style="min-width:90%;" src="/images/md/motherboard/انواع-فرم-فاکتور-itx.jpg">
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection