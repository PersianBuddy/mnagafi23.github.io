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
                <h3>گذرگاه AMR</h3>
                <p>
                    کذرگاه AMR یا <b>Audio/Modem Risser</b> برای اولین بار درسال 1998 عرضه شد. گذرگاه AMR برای اتصال وسایل آنالوگ مانند <a href="">کارت صدا</a> و <a href="">مودم</a> به مادربورد طراحی شده است. این گذرگاه از یک کانکتور به نام اسلات AMR استفاده می‌کند که <b>۴۸ پین</b> دارد و معمولا <b>قهوه‌ای</b> رنگ است.
                </p>
                <img class="img-responsive" alt="اسلات AMR" style="max-width:300px;" src="/images/md/motherboard/اسلات-amr.jpg">
                <p>
                    اسلات AMR فقط از کارت‌های توسعه <b>مبتنی بر نرم‌افزار</b> عمل می‌کند. این گونه کارت‌ها بسیاری از عملیاتشان با استفاده از <a href="">پردازنده</a> انجام می‌دهند. همچنین اینگونه کارت‌ها بدلیل مبتنی بر نرم‌افزار بودن، ارزانتر هستند.
                </p>
                <img class="img-responsive" alt="مودم AMR" style="max-width:600px;" src="/images/md/motherboard/مودم-amr.jpg">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>اسلات‌ها و کارت‌های AMR در مادربورد‌های امروزه پشتیبانی نمی‌شوند.
                </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection