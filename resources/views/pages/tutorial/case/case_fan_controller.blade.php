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
                <h3>سیستم مدیریت فن‌های کیس</h3>
                <p>
                    در برخی کیس‌ها این امکان قرار داده شده تا کاربر بدون نیاز به هیچ نرم‌افزار خاصی و فقط با چند دکمه <a href="">فن</a>‌های کیس را خاموش یا <b>سرعت</b>‌ آن‌ها  را تغییر دهد.
                </p>
                <img class="img-responsive" style="max-width:500px;" alt="سیستم کنترل سرعت فن کیس" src="/images/md/case/کنترل-سرعت-فن-کیس.jpg">
                <p>
                        علاوه بر کنترلر های فن کیس نوع دیگری از کنترل‌ها وجود دارد که در قسمت سینی‌‌های جلوی کیس قرار می‌گیرند و وظیفه کنترل <b>سرعت و رنگ فن</b> را برعهده می‌گیرند.
                </p>
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>برخی مدل‌های این کنترلر <b>لمسی</b> و برخی دیگر همراه با <b>کنترل از راه دور</b> عرضه می‌شوند.
                </p>
                <img class="img-responsive" style="max-width:600px;" alt="کنترلر سرعت فن‌های کیس" src="/images/md/case/کنترلر-سرعت-فن.jpg">
                
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection