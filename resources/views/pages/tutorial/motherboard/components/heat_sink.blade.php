@extends('layouts.app')

@section('title')
وظایف Heat Sink در مادربورد‌ها چیست؟
@endsection

@section('description')
Heat Sink‌ها در کامپیوتر بروی قطعاتی همچون پردازنده پل شمالی (Northbridge) یا پل جنوبی یا پردازنده قرار می‌گیرند و وظیفه‌ی انتقال حرارت قطعه به بیرون را بر عهده دارند | انواع Heat Sink
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('includes.tutorial_side_nav')
            </div>
            
            <div class="col-sm-9 page-content">
                <h3>Heat Sink</h3>
                <p>
                        قطعات الکترونیکی برای کارکرد بهینه نیاز دارند که در محدوده دمایی مشخصی کار کنند. افزایش دمای قطعه بیشتر از حد مجاز می‌تواند باعث <b>عملکرد نادرست</b> و <b>کاهش عمر</b> قطعه الکتریکی شود. بنابرین قطعات حرارت‌زا مانند <a href="{{url('tutorial/motherboard/components/اسلات-pci-express')}}">PCI Express</a> , <a href="{{url('tutorial/cpu/پردازنده-چیست')}}">پردازنده</a> (cpu) باید به قطعه‌ایی به نام حرارت‌گیر(heatsink) مجهز شوند تا دمای آن در محدوده مجاز نگه‌داشته شود.
                </p>
                <ul>
                        Headtsink، در دو نوع اکتیو (active) و پسیو (passive) عرضه می‌شود. 
                        <li>نوع اکتیو داری یک <a href="{{url('tutorial/motherboard/components/فن-کیس')}}">فن</a> می‌باشد و<b>دفع حرارت</b> در آن بهتر است و <b>طول عمر محدودی</b> دارند.</li>
                        <img class="img-responsive" alt="حرارت‌زدا یا heatsink اکتیو" src="/images/md/motherboard/heatsink-اکتیو.jpg">
                        <li>در مقابل نوع پسیو heatsink دارای <b>عمر نامحدود</b> است و صدایی تولید نمی‌کند؛ ولی برای کارکرد مناسب نیازمند جریان هوای استاندارد در داخل <a href="{{url('tutorial/case/انواع-کیس')}}">کیس</a> می‌باشد. </li>
                        <img class="img-responsive" alt="حرارت‌زدا یا heatsink پسیو" src="/images/md/motherboard/heatsink-پسیو.jpg">
                </ul>
                <p>
                    <span class="glyphicon glyphicon-hand-left"></span> در حرارت‌گیر پردازنده (CPU heatsink) باید heatsink با مدل پردازنده متناسب باشد؛ برای این منظور مشخصه‌ایی به نام <b>TDP</b> با واحد وات تعریف شده است.
                </p>
                <p>
                    <span class="glyphicon glyphicon-hand-left"></span> نوع متداول دیگر heatsink که بیشتر در <a href="{{url('tutorial/RAM/رم-کامپیوتر')}}">رم</a> کامپیوتر مشاهده می‌شود پخش کننده حرارت یا heatspreader نام دارد و معمولا از جنس <b>الومینیوم</b> یا <b>مس</b> و در برخی موارد <b>طلا</b> می‌باشد و وظیفه پخش کردن حرارت رم به بیرون را بر عهده دارد.
                </p>
                <img class="img-responsive" alt="پخش کننده گرمای رم یا heatspreader" src="/images/md/motherboard/پخش-کننده-گرما-رم.png">
                
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection