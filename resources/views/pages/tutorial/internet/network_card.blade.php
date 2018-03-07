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
                 <h3>کارت شبکه</h3>
                 <p>
                        کارت شبکه یا Network Adaptor یا <b>Ethernet card</b> یک کارت توسعه است که این امکان را برای سیستم مهیا می‌کند تا به شبکه متصل شود، یا از طریق کانکتور  <a href="">RJ-45</a>به <a href="">مودم اکسترنال</a> و اینترنت متصل شود.
                 </p>
                 <img class="img-responsive" alt="کارت شبکه" style="max-width:450px;" src="/images/md/internet/کارت-شبکه.jpg">
                 <p>
                    <span class="glyphicon glyphicon-info-sign"></span>بدلیل <b>قیمت پایین</b> و کاربرد بالای کارت شبکه، امروزه بیشتر <a href="">مادربورد</a>‌ها دارای کارت شبکه ان‌بورد On board هستند و نیازی به تهیه کارت شبکه مجزا وجود ندارد.
                 </p>
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection