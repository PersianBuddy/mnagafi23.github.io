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
                <h3>سیستم مدیریت کابل کیس</h3>
                <p>
                        سیستم مدیریت کابل در کیس این امکان را برقرار می‌کند تا کابل‌ها را به طور منظم از پشت سینی <a href="">مادربورد</a> عبور داده و به تمام قسمت‌ها برسانیم. این عمل باعث <b>نظم دادن</b> به فضای داخل <a href="">کیس</a> می‌شود که علاوه بر زیبایی خاصی این کیس‌ها باعث بهبود جریان هوای درون کیس می‌شود.
                </p>
                <img class="img-responsive" style="max-width:500px;" alt="سیستم مدیریت کابل در کیس" src="/images/md/case/مدیریت-کابل-کیس.jpg">
                
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection