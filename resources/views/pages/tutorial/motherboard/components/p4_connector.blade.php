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
                <h3>کانکتور ۴-پین (P4) پاور</h3>
                <p>
                    کانکتور ۴-پین P4 کانکتور ۱۲ ولتی پاور است که که با مادربورد‌ها با <a href="">پردازنده</a> <a href="">اینتل</a> Pentium 4 و جدیدتر بکار می‌روند. همچنین این کانکتور برای پردازنده‌های <a href="">AMD</a> هم استاندار سازی شده است.
                    همانطورکه در تصویر مشاهده می‌کنید این کانکتور شامل دو سیم زرد رنگ برق مستقیم ۱۲ ولت DC و دو سیم مشکی اتصال زمین می‌باشد.
                </p>
                <img class="img-responsive" style="width:200px;"  alt="کانکتور ۴-پین P4 پاور" src="/images/md/motherboard/کانکتور-p4-پاور.jpg">
                
                <p>
                        <span class="glyphicon glyphicon-hand-left"></span> کانکتور ۸-پین قابلیت <a href="">backward compatible</a> است یعنی اگر پاور شما کابل ۸-پین می‌باشد و <a href="">مادربورد</a> شما کانکتور ۴-پین P4 دارد، به راحتی می‌توانید کانکتور ۸-پین را به دو P4 تقسیم کنید و به مادربوردتان نصب کنید.
                </p>
                <img class="img-responsive" style="width:200px;"  alt="کانکتور ۸ پین پاور" src="/images/md/motherboard/کانکتور-۸پین-پاور.png">

                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection