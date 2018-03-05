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
                <h3>سیستم خنک کننده آبی Water Colling</h3>
                <p>
                        سیستم خنک کننده آبی  از روش‌های جدید برای خنک کردن سیستم با بازدهی بالا و صدای پایین می‌باشد و از سه قسمت CPU Water block، پمپ آب (water pump) و رادیاتور (radiator) تشکیل می‌شود. 
                </p>
                <a href="/images/xl/other/سیستم-خنک-کننده-آبی.jpg" target="_blank">
                    <img class="img-responsive" title="برای مشاهده تصویر بزرگ کلیک کنید" alt="اجزای سیستم خنک کننده آبی" style="max-width:600px;" src="/images/md/other/سیستم-خنک-کننده-آبی.jpg">
                </a>
                <h4>رایاتور</h4>
                <p>
                        وظیفه انتقال گرما به بیرون سیستم را بر عهده دارد در واقع آب گرم دورن رادیاتور جریان می‌یابد و هوا به وسیله‌ی فن به دورن لایه‌های رادیاتور می وزد و گرما را به خارج  منتقل و آب را خنک می‌کند.  رادیاتور‌ها در اندازه‌های مختلف بسته به نیاز کاربر ساخته عرضه می‌شوند.
                </p>
                <img class="img-responsive" alt="رادیاتور سیستم خنک کننده آبی" style="max-width:400px;" src="/images/md/other/رادیاتور-سیستم-خنک-کننده-آبی.jpg">
                <p>
                    <span class="glyphicon glyphicon-alert"></span>همواره نسبت به تمیز کردن رادیاتور اقدام کنید، رادیاتور کثیف و رسوب گرفته توانایی خنک کردن سیستم شما را نخواهد داشت.
                </p>
                <h4>پمپ آب</h4>
                <p>
                        برای به جریان درآوردن آب بکار میرود و از فلزاتی از قبیل آلومینیوم، نیکل و مس ساخته می‌شود. کانکتور پاور پمپ آب در انواع مختلف از کانتور SATA گرفته تا کانکتور ۳ پین وجود دارد.
                </p>
                <img class="img-responsive" alt="پمپ آب سیستم خنک کننده آبی" style="max-width:500px;" src="/images/md/other/پمپ-آب-سیستم-خنک-کننده.jpg">
                <h4>سیال درون لوله‌ها</h4>
                <p>
                        مایعی که درون لول‌ها در جریان دارد می‌تواند هر مایعی با قابلیت جذب گرما و رسوب کم باشد. مناسب ترین سیال سیستم water cooling آب مقطر است.
                </p>
                <p>
                    <span class="glyphicon glyphicon-alert"></span>برای زیبایی بیشتر می‌توان به آب مقطر رنگ دلخواه خود را اضافه کرد.
                </p>
                <h4>نحوه کار سیستم خنک کننده آبی</h4>
                <p>
                        وقتی پمپ آب، آب درون شلنگ را به جریان در می‌آورد، آب موجود در  water block حرارت پردازنده را جذب و این گرما به وسیله‌ی رادیاتور به خارج کیس منتقل می‌کند و دوباره آب سرد شده توسط پمپ آب به water block برگردانده می‌شود و این فرایند پی‌درپی تکرار می‌شود.
                </p>
                <p>
                    طراحی برخی از انواع سیستم‌های خنک کننده آبی به گونه‌ایی است که حرارت قطعاتی مانند رم، هارد و کارت گرافیک را نیز جذب می‌کنند.
                </p>
                
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection