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
                <h3>فیلتر گرد‌ و غبار کیس</h3>
                <p>
                    بدلیل اینکه گرد و غبار باعث عدم انتقال مناسب گرما توسط قطعات می‌شود، در برخی کیس‌ها فیلتر‌هایی در قسمت <a href="">فن</a>‌های <a href="">کیس</a> قرار داده شده تا از ورود گرد و غبار به داخل آن جلوگیری شود.  
                </p>
                <p>
                    بهترین نوع فیلتر گرد و غبار فیلتر <b>مغناطیسی</b> است که با ایجاد <b>بار‌الکتریکی</b> گرد و غبار را به خود جذب می‌کند.
                </p>
                <img class="img-responsive" style="max-width:600px;" alt="فیلتر گرد‌ و غبار کیس" src="/images/md/case/فیلتر-گرد-خاک-کیس.jpg">
                <p>
                    <span class="glyphicon glyphicon-alert"></span>هر چند وقت یکبار باید نسبت به <b>تمیز کردن</b> این فیلتر‌ها اقدام شود وگرنه تاثیر منفی در سرمایش سیستم دارد.
                </p>
               
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection