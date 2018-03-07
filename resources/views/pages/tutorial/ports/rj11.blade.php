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
                 <h3>پورت RJ-11</h3>
                 <p>
                        پورت RJ-11 یا <b>Registered Jack-11</b> یک پورت <b>۴ یا ۶ پین</b> می‌باشد. این پورت با نام‌های پورت مودم، کانکتور تلفن یا Phone Jack نیز معرفی می‌شود. 
                 </p>
                 <p>
                        از این پورت برای اتصال تلفن به مودم (<a href="">کارت مودم</a>) یا برقراری ارتباط اینترنت (<a href="">ADSL</a>) مورد استفاده قرار میگیرد. در زیر تصویر یک پورت Rj-11 به همراه کانکتور کابل Rj-11 نمایش داده شده است.
                 </p>
                 <img class="img-responsive" alt="پورت RJ-11" style="max-width:300px;" src="/images/md/ports/کابل-پورت-rj11.jpg">
                 <p>
                    <span class="glyphicon glyphicon-alert"></span>اگرچه پورت RJ-11 برای اتصال اینترنت نیز بکار میرود، اما توجه داشته باشید که این پورت با پورت <a href="">RJ-45</a> متفاوت می‌باشد. 
                 </p>
                 
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection