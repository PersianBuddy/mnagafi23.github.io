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
                <h3>Heat Sink</h3>
                <p>
                        قطعات الکترونیکی برای کارکرد بهینه نیاز دارند که در محدوده دمایی مشخصی کار کنند. افزایش دمای قطعه بیشتر از حد مجاز می‌تواند باعث عملکرد نادرست و کاهش عمر قطعه الکتریکی شود. بنابرین قطعات حرارت‌زا مانند <a href="">پردازنده</a> (cpu) باید به قطعه‌ایی به نام حرارت‌گیر(heatsink) مجهز شوند تا دمای آن در محدوده مجاز نگه‌داشته شود.
                </p>
                <ul>
                        Headtsink، در دو نوع اکتیو (active) و پسیو (passive) عرضه می‌شود. 
                        <li>نوع اکتیو داری یک <a href="">فن</a> می‌باشد ودفع حرارت در آن بهتر است و طول عمر محدودی دارند.</li>
                        <img class="img-responsive" alt="حرارت‌زدا یا heatsink اکتیو" src="/images/md/motherboard/heatsink-اکتیو.jpg">
                        <li>در مقابل نوع پسیو heatsink دارای عمر نامحدود است و صدایی تولید نمی‌کند؛ ولی برای کارکرد مناسب نیازمند جریان هوای استاندارد در داخل <a href="">کیس</a> می‌باشد. </li>
                        <img class="img-responsive" alt="حرارت‌زدا یا heatsink پسیو" src="/images/md/motherboard/heatsink-پسیو.jpg">
                </ul>
                <p>
                    <span class="glyphicon glyphicon-hand-left"></span> در حرارت‌گیر پردازنده (CPU heatsink) باید heatsink با مدل پردازنده متناسب باشد؛ برای این منظور مشخصه‌ایی به نام <a href="">TDP</a> با واحد وات تعریف شده است.
                </p>
                <p>
                    <span class="glyphicon glyphicon-hand-left"></span> نوع متداول دیگر heatsink که بیشتر در <a href="">رم</a> کامپیوتر مشاهده می‌شود پخش کننده حرارت یا heatspreader نام دارد و معمولا از جنس الومینیوم یا مس و در برخی موارد طلا می‌باشد و وظیفه پخش کردن حرارت رم به بیرون را بر عهده دارد.
                </p>
                <img class="img-responsive" alt="پخش کننده گرمای رم یا heatspreader" src="/images/md/motherboard/پخش-کننده-گرما-رم.png">
                
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection