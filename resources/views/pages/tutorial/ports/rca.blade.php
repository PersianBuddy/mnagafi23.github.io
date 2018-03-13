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
                 <h3>کانکتور و پورت RCA</h3>
                 <p>
                        کانکتور RCA دارای پوسته‌ی <b>دایره‌ای شکل</b> است و در <b>تجهیزات صوتی و تصویری</b> مانند DVD Player دستگاه‌های بازی و VCR برای اتصال آن‌‌ها به تلویزیون بکار می‌روند. این نوع کانکتور دارای کابل‌‌هایی به سه رنگ زرد، قرمز و سفید هستند در وسط نوع نری این کانکتور یک <b>میله</b> قرار می‌گیرد که در حفره‌ی پورت RCA متناظر با آن قرار می‌گیرد.
                 </p>
                 <img class="img-responsive" alt="پورت‌های مختلف RCA" style="max-width:600px;" src="/images/md/ports/پورت-rca.jpg">
                 <p>
                        <b>کابل زرد</b> رنگ مخصوص ویدیو است و کابل‌های قرمز و سفید برای صدا ( <b>قرمز</b> برای بلند‌گوی راست و <b>سفید</b> برای بلند‌گوی سمت چپ) طراحی شده‌اند.
                 </p>
                 <img class="img-responsive" alt="کابل‌های مختلف RCA" style="max-width:400px;" src="/images/md/ports/کابل-rca.jpg">
                 
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection