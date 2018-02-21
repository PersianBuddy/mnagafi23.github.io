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
                <h3>پنل پشت ماردبورد</h3>
                <p>
                        پنل پشت <a href="">مادربورد </a>(back panel) قسمتی است که لوازم جانبی مانند مانیتور، ماوس و کیبورد  و ... را به مادربورد متصل کنیم. پنل پشت مادربورد را می توان به راحتی در پشت <a href="">کیس</a> تشخیص داد. کانکتورهای پنل از درون صفحه (معمولاً فلزی) <a href="">I/O Plate</a>  کیس عبور داده شده اند. 
                </p>
                <figure>
                    <figcaption>
                            قسمت‌های مختلف پنل پشت مادربورد
                    </figcaption>
                    <a href="/images/xl/motherboard/کانکتورهای-پنل-پشت-مادربورد.jpg"><img alt="کانکتورهای پنل پشت مادربورد" title="برای دیدن تصویر اندازه بزرگ کلیک کنید" class="img-responsive" src="/images/md/motherboard/کانکتورهای-پنل-پشت-مادربورد.jpg"></a>
                </figure>
                <h4>کانکتورهای پشت مادربورد</h4>
                <p>
                    بسته به نوع مادربورد پورت هاو کانکتور‌های موجود در پنل پشتی آن متفاوت است در زیر چند نمونه از پورت‌های متداول در پنل پشت مادربورد آورده شده است. برای توضیح بیشتر بروی لینک مورد نظر کلیک کنید.
                </p>
                <ul class="list-number">
                    <div class="row">
                        <div class="col-md-6">
                            <li><a href=""> پورت PS/2</a></li>
                            <li><a href=""> پورت D-SUB</a></li>
                            <li><a href=""> Optical Digital Audio Output</a></li>
                            <li><a href=""> USB 2.0</a></li>
                            <li><a href=""> USB 3.0</a></li>
                            <li><a href=""> پورت شبکه</a></li>
                        </div>
                        <div class="col-md-6">
                            <li><a href=""> پنل ورودی و خروجی صدا</a></li>
                            <li><a href=""> کانکتور eSATA</a></li>
                            <li><a href=""> پورت HDMI</a></li>
                            <li><a href=""> پورت DisplayPort</a></li>
                            <li><a href="">DVI</a></li>
                        </div>
                    </div>
                    
                    
                </ul>
                
                {{--  related links  --}}
                <div id="related-links">

                </di>
                 
                
            </div>
        </div>
    </div>
@endsection