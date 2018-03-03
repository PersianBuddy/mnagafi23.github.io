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
                <h3>جامپر Jumper</h3>
                <div class="row">
                    <div class="col-sm-8">
                        <p>
                            جامپر به مجموعه‌ای از چند پین گفته می‌شود که به وسیله آن‌ها می‌توان یک یا چند <b>جریان الکتریکی</b> بروی یک برد خاص ایجاد کرد. پین‌های جامپر به وسیله یک قطعه پلاستیکی به نام <b>بلاک جامپر</b> (Jumper Block) به یکدیگر متصل می‌شوند و جریان‌های مختلف را برقرار می‌کنند.
                        </p>
                        ‌<p>
                            بر طبق تصویر نشان داده شده، با تغییر محل قرارگیری بلاک جامپر حالت برد بین سه حالت Recovery، Config و Normal تغییر می‌کند.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <img class="img-responsive" alt="تغییر محل بلاک جامپر" style="max-width: 250px;" src="/images/md/motherboard/جامپر-مادربورد.jpg">
                    </div>
                </div>
                <p>
                    <span class="glyphicon glyphicon-alert"></span>هنگام اتصال و یا تعویض محل بلاک جامپر حتماً سیستم خود را <b>خاموش</b> کنید. همچنین همواره هنگام کار با لوازم الکترونیکی موارد ایمنی در مورد تخلیه الکتریسیته ساکن (<a href="">ESD</a>) را رعایت کنید.
                </p>
                <p>
                    جامپر‌ها همچنین برای <b>تغییر تنظیمات</b> در <a href="">مادربورد</a>، <a href="">هارد</a>، <a href="">مودم</a> و <a href="">کارت صدا</a> و۰۰۰ بکار می‌روند.
                </p>
                <img class="img-responsive" alt="جامپر هارد" style="max-width:600px;" src="/images/md/motherboard/جامپر-هارد.jpg">
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection