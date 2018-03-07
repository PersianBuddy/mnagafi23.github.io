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
                 <h3>پورت RJ-45</h3>
                 <p>
                    مخفف عبارت <b>Registered Jack-45</b> یک پورت <b>۸ پین</b> می‌باشد که برای اتصال به شبکه مورد استفاده قرار می‌گیرد. همچنین به این پورت پورت <b>LAN</b> نیز گفته می‌شود.
                 </p>
                 <img class="img-responsive" alt="پورت RJ-45" style="max-width:300px;" src="/images/md/ports/پورت-rj-45.jpg">
                 <p>
                        کانکتور RJ-45 در انتهای کابل <b>Cat5</b> (کابل نشان داده شده در تصویر) واقع شده است و به پورت LAN متصل می‌شود.
                 </p>
                 <img class="img-responsive" alt="کابل CAT 5" style="max-width:300px;" src="/images/md/ports/کابل-cat5.jpg">
                 <p>
                    <span class="glyphicon glyphicon-warning-sign"></span>کانکتور RJ-45 با کانکتور <a href="{{url('tutorial/ports/پورت-RJ-11')}}">RJ-11</a> متفاوت می‌باشد.
                 </p>
                 
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection