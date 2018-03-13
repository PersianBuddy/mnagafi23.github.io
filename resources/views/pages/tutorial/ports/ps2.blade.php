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
                <h3>پورت PS/2</h3>
                <p>
                    پورت PS/2 یک پورت <b>۶ پین</b> می‌باشد که برای اتصال قطعاتی مانند کیبورد و ماوس به کامپیوتر مورد استفاده قرار می‌گیرد. کاکتور ۶ پین <b>mini DIN</b> به این پورت متصل می‌شود. همچنین بسته به نوع وسیله‌ی قابل اتصال به این پورت رنگ آن نیز متفاوت است. برای مثال پورت مخصوص کیبورد به رنگ <b>بنفش</b> و پورت ماوس <b>سبز</b> (teal) می‌باشد.
                </p>
                <img class="img-responsive" alt="پورت کیبورد و ماوس PS/2" style="max-width:400px;" src="/images/md/ports/پورت-ps-2.jpg">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>در کامپیوتر‌های جدید برای اتصال کیبورد و ماوس از پورت <a href="">USB</a> استفاده می‌شود.
                </p>
                <p>
                        در زیر تصویر انتهای کابل PS/2 ماوس (سبز) و کیبورد (بنفش) را می‌بینید.
                </p>
                <img class="img-responsive" alt="کابل ماوس و کیبورد PS/2" style="max-width:400px;" src="/images/md/ports/کابل-ps-2.jpg">
                {{--  related links  --}}
                <div id="related-links">
                    <a href="{{url('tutorial/ports/مقایسه-پورت-PS/2-و-USB')}}">مقایسه پورت‌های USB و PS/2 برای کیبورد و ماوس</a>
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection