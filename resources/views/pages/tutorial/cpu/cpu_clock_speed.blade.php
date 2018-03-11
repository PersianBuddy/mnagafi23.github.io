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
                <h3>فرکانس پردازنده (Clock Speed)</h3>
                <p>
                        قبل از تعریف فرکانس پردازنده باید با مفهوم <b>Clock Cycle</b> یا سیکل ساعت آشنا باشید. سیکل ساعت به <b>یک چرخه کامل</b> موج الکترومغناطیسی که به طور متناوب تکرار می‌شود گفته می‌شود.
                </p>
                <img class="img-responsive" alt="سیکل ساعت" style="max-width:400px;" src="/images/md/cpu/سیکل-ساعت.jpg">
                <p>
                        به تعداد سیکل‌های (الگو‌‌های تکرار شده) <b>در یک ثانیه</b> فرکانس یا سرعت ساعت یا Clock Speed گفته می‌شود و یکی از معیار‌های تعیین قدرت <a href="">پردازنده</a> می‌باشد. واحد فرکانس پردانده هرتز (<b>Hz</b>) میباشد.
                </p>
                <h4>آیا هر چه فرکانس پردازنده بیشتر باشد پردازنده سریعتر است؟</h4>
                <p>
                        در صورتی که تمام ویژگی‌های دیگر دو پردازنده مورد مقایسه یکی باشد، آن پردازنده‌ای که فرکانس بیشتری دارد سرعت بیشتری دارد. اما امروزه پردازنده‌ها با ویژگی‌های زیادی از قبیل <a href="">چند هسته‌ای</a> (Multi-core)، <a href="">چند رشته‌ای</a> (Hyper-threading)  و غیره ساخته می‌شوند که در سرعت پردازنده تاثیر زیادی دارند.
                </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection