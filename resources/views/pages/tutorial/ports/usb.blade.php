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
                <h3>پورت USB</h3>
                <p>
                        <b>Universal Serial Bus</b> یا به اختصار USB، یک <b><a href="">گذرگاه</a> سریال</b> است که برای اتصال وسایل اکسترنال (external) به سیستم، طراحی شده است. این گذرگاه امکان اتصال قطعات با ویژگی <a href="">PnP</a> (پلاگ اند پلی)  و <a href="">hot plugging</a> را فراهم می‌کند. همچنین این گذرگاه <b>برق مورد نیاز</b> به خود را بدون نیاز به منبع تغذیه خارجی تامین می‌کند.
                </p>
                <h4>ساختار USB</h4>
                <p>
                        برای گذرگاه USB <b>چهار جزء</b> تعریف شده است که عبارتند از:   
                </p>
                <ul class="custom-list">
                    <li><span class="sublist-title">USB host controller :</span> این جزء که در <a href="">Southbridge</a> <a href="">مادربورد</a> واقع شده است، در واقع کنترلر گذرگاه و تمام قطعات متصل به آن است. این کنترلر امکان اتصال حداکثر <b>۱۲۸ قطعه</b> USB به سیستم را ایجاد می‌کند.</li>
                    <li><span class="sublist-title">USB hub :</span> این جزء امکان اتصال چندین وسیله را به گذرگاه مهیا می‌کند و در انواع همراه با اداپتور و بدون اداپتور عرضه می‌شود. برخی از انواع USB hub به طور مستقل عرضه می‌شوند و برخی در وسایل جانبی دیگر مانند کیبورد یا مانیتور جاسازی شده‌اند.</li>
                    <img class="img-responsive" alt="USB hub" style="max-width:600px;" src="/images/md/ports/usb-hub.jpg">
                    <li><span class="sublist-title">Root hub :</span> این جزء در واقع یک USB hub <b>جدایی‌ناپذیر</b> از کنترلر گذرگاه است. هر کنترلر گذرگاه، به دلیل وجود همیشگی این hub (که خود یک وسیله‌ی USB محسوب می‌شود)، می‌تواند ۱۲۸ قطعه را پشتیبانی کند.</li>
                    <li><span class="sublist-title">Node :‌</span> به قطعاتی که به گذرگاه متصل شده و از این طریق با سیستم ارتباط برقرار می‌کنند، Node گفته می‌شود.</li>
                </ul>
                <h4>انواع استاندارد‌های USB</h4>
                <p>
                        استاندارد USB مشخصات گذرگاه و قطعات USB را تعریف می‌کند و هر نسخه از این استاندارد <b>سرعت متفاوتی</b> را پشتیبانی می‌کند. در ادامه این نسخه‌ها را مورد بررسی قرار می‌گیرد:
                </p>
                <ul class="custom-list">
                    <li><span class="sublist-title">USB 1.1</span> : در این استاندارد که در سال ۱۹۹۸ معرفی شد، سرعت انتقال داده تا حداکثر <b>۱۲ مگابایت در ثانیه</b> می‌باشد. برای شناسایی این وسایل از لوگوی زیر استفاده می‌شود.</li>
                    <img class="img-responsive" alt="لوگوی USB 1.1" style="max-width:200px;" src="/images/md/ports/لوگوی-usb-1-1.jpg">
                    <li><span class="sublist-title">USB 2.0</span> : این استاندارد در سال ۲۰۰۰ عرضه شد و حداکثر سرعت تعریف شده برای آن <b>۴۸۰ مگابایت در ثانیه</b> می‌باشد. USB 2.0 امکان برق‌رسانی تا <b>۵۰۰ میلی‌آمپر</b> با ولتاژ ۵ ولت به قطعات متصل را فراهم می‌کند.</li>
                    <img class="img-responsive" alt="لوگوی USB 2.0" style="max-width:200px;" src="/images/md/ports/لوگوی-usb-2-0.jpg">
                    <li><span class="sublist-title">USB OTG</span> : یا USB On-To-Go یک الحاقی برای استاندارد USB 2.0 می‌باشد. قطعاتی که از این استاندارد پشتیبانی می‌کنند، خود می‌توانند گذرگاه را مدیریت کنند (برخلاف USB کامپیوتر که وابسته به USB host controller هستند)؛‌این گونه وسایل <b>بدون اتصال به کامپیوتر</b> به وسیله‌ی دیگر متصل شده و تبادل داده انجام می‌دهند.</li>
                    <img class="img-responsive" alt="لوگوی USB OTG" style="max-width:200px;" src="/images/md/ports/لوگوی-usb-otg.jpg">
                    <li><span class="sublist-title">USB 3.0</span> :‌ این استاندارد برای اولین بار در سال ۲۰۰۸ عرضه شد و دارای حداکثر سرعت انتقال داده <b>۵ گیگابایت در ثانیه</b> ( ۱.۳ گیگابایت در ثانیه) می‌باشد. این گذرگاه برخلاف USB 2.0 می‌توانند عمل خواندن و نوشتن را به صورت همزمان انجام دهد همچنین با <b>۹۰۰ میلی‌آمپر</b> و ولتاژ ۵ ولت به وسایل متصل به خود برق‌رسانی می‌کنند.</li>
                    <img class="img-responsive" alt="لوگوی USB 3.0" style="max-width:200px;" src="/images/md/ports/لوگوی-usb-3-0.jpg">
                    <li><span class="sublist-title">USB 3.1</span> : سرعت انتقال داده در این استاندارد تا <b>۱۰ گیگابایت در ثانیه</b>  می‌باشد.</li>
                    <img class="img-responsive" alt="لوگوی USB 3.1" style="max-width:200px;" src="/images/md/ports/لوگوی-usb-3-1.jpg">
                </ul>
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>استاندارد گذرگاه‌ها و وسایل USB با یکدیگر <b>سازگار</b> هستند؛ یعنی موتوان هر وسیله‌یUSB را به هر نوع گذرگاهی متصل کرد. اما سرعت کلی انتقال داده برابر با استاندارد پایین‌تر می‌باشد.
                </p>
                <h4>سرعت قطعات USB</h4>
                <p>
                        همانطور که در بالا ذکر شد هر استاندارد USB، بیشینه سرعت مشخصی را ارائه می‌دهد. اما این بدین معنی نیست که برای مثال یک قطعه‌ی USB 2.0 تنها با سرعت ۴۸۰ مگابایت در ثانیه کار می‌کند. وسایل USB از جهت مقدار <b>سرعت انتقال داده</b> به چهار نوع زیر تقسیم می‌شوند:
                </p>
                <ul class="custom-list">
                    <li><span class="sublist-title">Low Speed :</span> سرعت این قطعات ۱.۵ مگابایت در ثانیه است و برخی وسایل USB 1 و USB 2.0 با این استاندارد کار می‌کنند. این سرعت برای کاهش هزینه در وسایلی مانند کیبورد و ماوس مورد استفاده قرار می‌گیرد.</li>
                    <li><span class="sublist-title">Full Speed :</span> سرعت این قطعات ۱۲ مگابایت در ثانیه است و برخی وسایل USB 1 و USB 2.0 این سرعت را دارند.</li>
                    <li><span class="sublist-title">High Speed :</span> سرعت تعریف شده برای این قطعات ۴۸۰ مگابایت در ثانیه می‌باشد که در برخی وسایل USB 2.0 بکار می‌روند.</li>
                    <li><span class="sublist-title">Super Speed :‌</span> سرعت این قطعات ۵ گیگابایت در ثانیه می‌باشد و برخی وسایل USB 3.0 با این سرعت کار می‌کنند.</li>
                    <li><span class="sublist-title">+ Super Speed :‌</span> سرعت در این قطعات (USB 3.1) به ۱۰ گیگابایت در ثانیه می‌رسد.</li>
                </ul>
                <h4>کانکتور USB</h4>
                <p>
                        کابل USB، کابلی <b>چهار رشته‌ای</b> می‌باشد که شامل دو سیم D+ به رنگ سبز و ‌D- به رنگ سفید برای انتقال داده‌ها و یک سیم قرمز با ولتاژ ۵ ولت و سیم مشکی اتصال به زمین، می‌باشد.
                </p>
                <p>
                        در سمت کامیپوتر از کانکتور نوع A در USB‌ها استفاده می‌شود، البته در USB 3.0 کانکتور <b>نوع A</b> کمی متفاوت است و دارای <b>چهار پین اضافی</b> در انتها می‌باشد (معمولاً به رنگ آبی) اما با این وجود براحتی می‌توان از دستگاه‌های USB 2.0 در این کانکتور استفاده کرد.
                </p>
                <img class="img-responsive" alt="پورت USB نوع A" style="max-width:400px;" src="/images/md/ports/پورت-usb-نوع-a.jpg">
                {{--  related links  --}}
                <div id="related-links">
                    <a href="{{url('tutorial/ports/استاندارد-USB-Type-C')}}">استاندارد USB  Type-C</a>
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection