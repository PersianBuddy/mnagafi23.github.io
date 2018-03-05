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
                <h3>کیس‌های ماژولار</h3>
                <p>
                    در این نوع <a href="">کیس‌ها</a>  پنل‌ها و برخی یا کل اجزای <a href="">مادربورد</a> <b>قابل جداسازی</b> هستند. برای مثال دربرخی کیس‌ها امکان جداسازی قفسه‌های <a href="">هارد</a> برای نصب <a href="">کارت‌های گرافیک</a> یا <a href="">پاور‌ها</a> با طول بزرگ وجود دارد.
                </p>
                <img class="img-responsive" alt="کیس ماژولار" style="min-width:90%;" src="/images/md/case/کیس-ماژولار.jpg">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>در بسیاری از  کیس‌های ماژولار صفحه‌ایی برای <b>نصب مادربورد</b> تعبیه شده است و این امکان را به کاربر می دهد که مادربورد را ابتدا روی این صفحه نصب کرده و سپس آن را بروی کیس قرار دهند.
                </p>
                <img class="img-responsive" alt="سینی جداشوند نصب مادربورد بروی کیس" style="max-width:300px;" src="/images/md/case/سینی-نصب-مادربورد-بروی-کیس.jpg">
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection