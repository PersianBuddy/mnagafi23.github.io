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
                <h3>SIO چیست؟</h3>
                <div class="row">
                    <div class="col-sm-8">
                        <p>
                                کوتاه شده Super input/output یا Super I/O است. SIO یک IC است که وظیفه کنترل دستگاه‌های ورودی و خروجی دارای اهمیت و سرعت کمتر که در زیر لیست شده را بر عهده دارد. هنگام اولین معرفی Super I/O در اواخر دهه ۸۰ میلادی به شکل یک کارت توسعه عرضه شد اما بعد ها به عنوان یک عضو بروی <a href="">مادربورد‌ها</a> قرار گرفت.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <img class="img-responsive" alt="تصویر Super I/O" src="/images/md/motherboard/عکس-super-io.jpg">
                    </div>
                </div>
                <h4>کدام دستگاه‌ها توسط SIO کنترل می‌شوند؟</h4>
                <ul>
                    <div class="row">
                        <div class="col-sm-6">
                        <li><a href="">فلاپی دیسک</a></li>
                            <li><a href="">Game Port</a></li>
                            <li><a href="">مارون قرمز</a></li>
                            <li><a href="">ماوس</a></li>
                        </div>
                        <div class="col-sm-6">
                            <li><a href="">کیبورد</a></li>
                            <li><a href="">پورت موازی</a></li>
                            <li><a href="">پورت سریال</a></li>
                            <li><a href="">ساعت RTC</a></li>
                        </div>
                    </div>
                </ul>
                <p>
                        <span class="glyphicon glyphicon-hand-left"></span> در برخی مادربوردهای جدید Super I/o و <a href="">Southbridge</a> با هم ترکیب شده و به عنوان یک چیپ با نام Super Southbridge معرفی می‌شوند. همچنین برخی شرکت‌ها مانند <a href="">Nvidia</a> حتی چیپ <a href="">Northbridge</a> را نیز با دو چیپ قبلی ترکیب کرده و به عنوان یک چیپ عرضه می‌کنند.
                </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection