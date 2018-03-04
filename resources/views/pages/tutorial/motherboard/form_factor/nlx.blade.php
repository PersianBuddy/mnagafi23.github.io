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
                <h3>فرم فاکتور NLX</h3>
                <p>
                    NLX کوتاه شده‌ی عبارت New Low Profile Extended می‌باشد. فرم فاکتور NLX در سال 1997 توسط شرکت <a href="">اینتل</a> در ساز‌های (۲۵۴ در ۲۰۳ میلیتر) تا (۳۴۵ در ۲۲۹ میلی‌متر) عرضه شد. در این نوع <a href="">مادربورد</a> یک بر <b>جدا شونده</b> برای نصب اسلات‌‌های توسعه دارد.
                </p>
                <img class="img-responsive" alt="نحوه چینش اجزای فرم فاکتور NLX" style="max-width:350px;" src="/images/md/motherboard/چینش-اجزای-فرم-فاکتور-nlx.jpg">
                <h5>از ویژگی‌‌های این نوع فرم فاکتور می‌توان به موارد زیر اشاره کرد ...</h5>
                <ul class="list-group">
                    <li class="list-group-item">جزء اولین مادربورد‌های با قابلیت ساپورت اسلات <a href="">AGP</a> می‌باشد</li>
                    <li class="list-group-item"><b>نصب راحت</b> مادربورد بدون نیاز به بستن پیچ و همچنین جدا کردن آسان بدون نیاز به جدا کردن اسلات های توسعه</li>
                </ul>
                <a href="/images/xl/motherboard/فرم-فاکتور-nlx.jpg">
                    <img class="img-responsive" alt="فرم فاکتور NLX" style="max-width:450px;" src="/images/md/motherboard/فرم-فاکتور-nlx.jpg">
                </a>

                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>این نوع مادربورد دیگر تولید نمی‌شود.
                </p>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection