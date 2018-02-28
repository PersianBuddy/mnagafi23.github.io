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
                <h3>اسلات رم Memory Slot</h3>
                <p>
                        اسلات <a href="">رم</a> یا Memory Slot یک اسلات بروی مادربورد برای اتصال رم به کامپیوتر است. ممکن است دو یا چهار اسلات رم بروی <a href="">مادربورد</a> بسته به نوع آن وجود داشته باشد و از تکنولوژی <a href="">Dual Channel</a> استفاده کنند.
                </p>
                <img class="img-responsive" alt="چهار اسلات رم ddr3" src="/images/md/motherboard/اسلات-رم-ddr3.jpg">
                <p>
                        <a href="">انواع متفاوت رم</a> ولتاژ‌های کاری متقاوت دارند و درصورتی که یک ماژول رم  در سوکت مربوط به رم دیگری قرار داده شود، ماربورد یا رم می‌سوزد. برای پیشگیری از این اتفاق تمامی اسلات‌های رم دارای یک یا دو دندانه (notch) هستند تا هر رم تنها قابل نصب بروی اسلات نوع خودش باشد. 
                </p>
                <img class="img-responsive" alt="محل قرارگیری دندانه در رم‌های مختلف" src="/images/md/motherboard/محل-دندانه-روی-رم.jpg">
                {{--  related links  --}}
                <div id="related-links">

                </di>
                 
                
            </div>
        </div>
    </div>
@endsection