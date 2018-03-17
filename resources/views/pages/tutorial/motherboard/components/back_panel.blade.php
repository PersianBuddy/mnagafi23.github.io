@extends('layouts.app')

@section('title')
پنل پشت مادربورد و پورت‌های موجود
@endsection

@section('description')
پنل پشت مادربورد(back panel)  قسمتی است که لوازم جانبی مانند مانیتور، ماوس و کیبورد و ... را به مادربورد متصل می‌کنیم | معرفی انواع پورت‌های پنل پشت مادربورد
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
                        پنل پشت <a href="{{url('tutorial/motherboard/مادربورد-چیست')}}">مادربورد </a>(back panel) قسمتی است که لوازم جانبی مانند مانیتور، ماوس و کیبورد  و ... را به مادربورد متصل می‌کنیم. پنل پشت مادربورد را می توان به راحتی در پشت <a href="{{url('tutorial/case/انواع-کیس')}}">کیس</a> تشخیص داد. کانکتورهای پنل از درون صفحه (معمولاً فلزی) <b>I/O Plate</b>  کیس عبور داده شده اند. 
                </p>
                <figure>
                    <figcaption>
                            قسمت‌های مختلف پنل پشت مادربورد
                    </figcaption>
                    <a href="/images/xl/motherboard/کانکتورهای-پنل-پشت-مادربورد.jpg"><img alt="کانکتورهای پنل پشت مادربورد" title="برای دیدن تصویر اندازه بزرگ کلیک کنید" class="img-responsive" src="/images/md/motherboard/کانکتورهای-پنل-پشت-مادربورد.jpg"></a>
                </figure>
                <h4>کانکتورهای پشت مادربورد</h4>
                <p>
                    بسته به <b>نوع مادربورد</b> پورت هاو کانکتور‌های موجود در پنل پشتی آن متفاوت است در زیر چند نمونه از پورت‌های متداول در پنل پشت مادربورد آورده شده است. برای توضیح بیشتر بروی لینک مورد نظر کلیک کنید.
                </p>
                <ul class="list-number">
                    <div class="row">
                        <div class="col-md-6">
                            <li><a href="{{url('tutorial/ports/پورت-PS-2')}}"> پورت PS/2</a></li>
                            <li><a href="{{url('tutorial/ports/پورت-VGA')}}"> پورت D-SUB</a></li>
                            <li><a href="{{url('tutorial/ports/پورت-TOSLINK')}}"> پورت Optical Digital Audio یا TOSLINK</a></li>
                            <li><a href="{{url('tutorial/ports/مقایسه-پورت-های-USB')}}"> USB 2.0</a></li>
                            <li><a href="{{url('tutorial/ports/مقایسه-پورت-های-USB')}}"> USB 3.0</a></li>
                            <li><a href="{{url('tutorial/ports/پورت-RJ-45')}}"> پورت شبکه</a></li>
                        </div>
                        <div class="col-md-6">
                            <li><a href="{{url('tutorial/ports/پورت-RCA-mini-jack')}}"> پورت‌های ورودی و خروجی صدا RCA mini-jack</a></li>
                            <li><a href="{{url('tutorial/motherboard/components/SATA-چیست')}}"> کانکتور eSATA</a></li>
                            <li><a href="{{url('tutorial/ports/پورت-HDMI')}}"> پورت HDMI</a></li>
                            <li><a href="{{url('tutorial/ports/پورت-DisplayPort')}}"> پورت DisplayPort</a></li>
                            <li><a href="{{url('tutorial/ports/پورت-DVI')}}">پورت DVI</a></li>
                        </div>
                    </div>
                    
                    
                </ul>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection