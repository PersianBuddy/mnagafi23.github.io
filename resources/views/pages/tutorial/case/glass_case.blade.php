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
                <h3>کیس‌های بدنه شفاف</h3>
                <p>
                    امروزه در طراحی قطعات داخلی کامپیوتر به زیبایی قطعات اهمیت زیادی داده می‌شود. شاید هنگام خرید یک قطعه (مانند <a href="">مموری</a> یا <a href="">مادربورد</a> و ... ) متوجه شده‌اید که این قطعه در رنگ‌ها و شکل‌های زیبای زیادی عرضه می‌شود.
                </p>
                <p>
                        خرید یک قطعه زیبا بدون به نمایش گذاشتن تا حدودی اتلاف بودجه خرید است. حال آنکه امروزه کیس‌هایی عرضه می‌شوند که یک طرف یا دو طرف بدنه (و گاهی قسمت جلو) به صورت شفاف طراحی شده‌اند تا قطعات درون کیس براحتی دیده شود.
                </p>
                <img class="img-responsive" style="max-width:350px;" alt="کیس بدنه شفاف" src="/images/md/case/کیس-بدنه-شفاف.jpg">
                <p>
                    <span class="glyphicon glyphicon-hand-left"></span>جنس قسمت‌های شفاف کیس گاهی از <b>پلاستیک شفاف</b> (مدل ارزان قیمیت) و گاهی از <b>شیشه</b> (قیمت بالا) می‌باشد.
                </p>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection