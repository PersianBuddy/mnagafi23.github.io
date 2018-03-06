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
                <h3>گذرگاه CNR</h3>
                <p>
                    گذرگاه CNR یا Communication and Network Riser یک اتصال  نقطه به نقطه است که در سال 2000 توسط شرکت اینتل معرفی شد. این گذرگاه از طرق اسلات <b>۶۴ پینی</b> و <b>قهوه‌ایی</b> رنگ CNR برای اتصال <a href="">کارت صدا</a>، <a href="">کارت شبکه</a>، <a href="">مودم</a> و USB به <a href="">مادربورد</a> مورد استفاده قرار می‌گیرد.
                </p>
                <img class="img-responsive" alt="مقایسه اسلات CNR و AMR" style="max-width:220px;" src="/images/md/motherboard/اسلات-cnr-amr.jpg">
                <p>
                    برخی کارت‌های CNR در اسلات AMR نیز قابل نصب هستند.
                </p>
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>امروزه اسلات‌ CNR در مادربورد‌ها جای خود را به اسلات‌های <a href="">PCI</a> و <a href="">PCIe</a> داده است.
                </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection