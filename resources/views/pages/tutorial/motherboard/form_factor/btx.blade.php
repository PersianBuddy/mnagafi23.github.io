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
                <h3>فرم فاکتور BTX</h3>
                <p>
                    BTX کوتاه شده عبارت Balanced Technology Extended می‌باشد. BTX در سال 2003 برای اولین بار به عنوان <b>جایگزین</b> فرم فاکتور <a href="">ATX</a> توسط شرکت <a href="">اینتل</a> در اندازه‌های مختلف (نوع استاندارد <b>۳۲۵ در ۲۶۷</b> میلی‌متر) عرضه شد (به دلیل <b>محبوبیت پایین</b> در سال 2006 تولید آن متوقف شد).
                </p>
                <img class="img-responsive" alt="نحوه چینش اجزا در فرم فاکتور BTX" style="max-width:600;" src="/images/md/motherboard/فرم-فاکتور-btx.jpg">
                <p>
                    در فرم فاکتور BTX اسلات‌های رم (<a href="">Memory</a>) و اسلات‌های توسعه در دو طرف پردازنده به صورت افقی قرار گرفته شده‌اند و پردازنده با زاویه <b>45 درجه</b> رو <a href="">مادربورد</a> جای گرفته است. از مزایای این فرم فاکتور نسبت به ATX می‌توان به وجود جریان هوای بهتر (بدلیل چینش اجزا در <b>یک جهت</b>) در آن اشاره کرد.
                </p>
                <p>
                    <span class="glyphicon glyphicon-hand-left"></span>برخلاف ATX <a href="">پنل پشتی</a> مادربورد در قسمت <b>پایین</b> آن قرار گرفته است.
                </p>
                <img class="img-responsive" alt="مقایسه فرم فاکتور ATX و BTX" style="max-width:500;" src="/images/md/motherboard/مقایسه-فرم-فاکتور-atx-btx.jpg">
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection