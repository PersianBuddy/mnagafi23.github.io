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
                <h3>پورت Digital Audio Coax</h3>
                <p>
                        پورت Digital Audio Coax یا به اختصار <b>Coax</b>، توانایی انتقال صدا با کیفیت بالا را دارد  و یک خروجی برای <a href="">صدای چند کاناله</a> برای <b>سینمای خانگی</b> می‌باشد.
                </p>
                <img class="img-responsive" alt="کابل Digital Audio COAX" style="max-width:300px;" src="/images/md/ports/کابل-coax.jpg">
                <p>
                        پورت Coax از نوع <a href="">RCA</a> می‌باشد و با لیبل (نوشته) Digital Audio Output در کنار آن در وسایل صوتی، قابل تشخیص می‌باشد.
                </p>
                <img class="img-responsive" alt="پورت Digita Audio Toslink و Digital Coax" style="max-width:400px;" src="/images/md/ports/پورت-toslink.jpg">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>امروزه پورت Coax جای خود را به <b>پورت نوری</b> <a href="">TOSLINK</a> یا پورت <a href="">HDMI</a> داده است. 
                </p>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection