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
                <h3>SATA</h3>
                <p>
                    <b>Serial ATA</b> برای اولین بار در سال ۲۰۰۱ بعنوان جایگزین <a href="">Parallel ATA</a> معرفی شد. و برای اتصال قطعاتی همچون <a href="">هارد</a> و <a href="">دی‌وی‌دی رایتر</a> DVD writer به <a href="">مادربورد</a> بکار می‌رود.
                </p>
                <ul class="custom-list">
                    SATA در سه نوع و با سرعت‌های متفاوت عرضه میشود.
                    <li>SATA I یا <b>SATA 1.5 Gbps</b> با سرعت انتقال داده ۱۵۰ مگابایت بر ثانیه</li>
                    <li>SATA II یا <b>SATA 3 Gbps</b> با سرعت انتقال داده ۳۰۰ مگابایت بر ثانیه</li>
                    <li>SATA I یا <b>SATA 6 Gbps</b> با سرعت انتقال داده ۶۰۰ مگابایت بر ثانیه</li>
                </ul>
                <img class="img-responsive" alt="کانکتور‌های SATA روی مادربورد" src="/images/md/motherboard/کانکتور-sata-مادربورد.jpg">
                <div class="row">
                    <div class="col-sm-9">
                            کانکتور SATA  را می‌تواند برای <b>درایو‌های خارجی</b> نیز استفاده کرد، به این نوع External SATA یا <b>eSATA</b> نیز گفته می‌شود. eSATA نسبت به کانکتور‌های دیگر مانند <a href="">USB</a> سرعت بالاتری دارد اما نکته منفی آن عدم انتقال جریان برق مورد نیاز درایو است و درایو مورد نظر باید برق مورد نیاز خود را به طریقی دیگر تامین کند. همچنین eSATA کابل با حداکثر طول ۲ متر را ساپورت می‌کند.
                    </div>
                    <div class="col-sm-3">
                        <img class="img-responsive" style="width:200px;" alt="پورت eSATA" src="/images/md/motherboard/پورت-esata.jpg">
                    </div>
                </div>
                <h4>آیا  می‌توان درایو SATA 3 را به کانکتور SATA 1 متصل کرد؟</h4>
                <p>
                        <b>بله</b>، کانکتور SATA با تغییر استاندارد همچنان ثابت است اما بدلیل سرعت متفاوت در استاندارد‌های مختلف درایو متصل با استاندارد کمتر کار می‌کند، یعنی اگر هارد SATA 3 را به کانکتور SATA 1 متصل کنیم با هارد با حداکثر سرعت 150 مگابایت بر ثانیه عمل خواهد کرد.
                </p>
                <h4>کابل پاور SATA</h4>
                <p>
                        کابل <a href="">پاور</a> که دارای <b>۱۵ پین</b> است و در مقایسه با کابل دیتا SATA که <b>۷ پین</b> دارد، عرض بیشتر دارد و وظیفه تامین برق درایور SATA را برعهده دارد.
                </p>
                <img class="img-responsive" alt="انواع کابل sata" src="/images/md/motherboard/کابل-دیتا-پاور-sata.jpg">
                <img class="img-responsive" alt="اتصالات هارد sata" src="/images/md/motherboard/اتصالات-هارد-sata.jpg">
               
                {{--  related links  --}}
                <div id="related-links">

                </di>
                 
                
            </div>
        </div>
    </div>
@endsection