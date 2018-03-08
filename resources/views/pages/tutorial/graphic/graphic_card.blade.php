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
                 <h3>کارت گرافیک</h3>
                 <p>
                        کارت گرافیک یا <b>کارت ویدیو</b> (video card)، بردی است که <b>سیگنال‌های ویدیویی</b> تولید می‌کند و این سیگنال‌ها را از طریق کابل به نمایشگر ارسال می‌کند. در <a href="">مادربورد</a>‌‌های امروزه پردازش‌های سبک تصاویر (مناسب کاربران معمولی) انجام می‌شود و پورت‌های اتصال به <a href="">مانیتور</a> را نیز به صورت پیش فرض دارا می‌باشند.
                 </p>
                 <img class="img-responsive" alt="اجزای کارت گرافیک" style="max-width:600px;" src="/images/md/graphic/اجزای-کارت-گرافیک.jpg">
                 <h4>اجزای کارت ویدیو</h4>
                 <p>
                        کارت ویدیو از <b>چهار</b> بخش عمده تشکیل شده است.
                 </p>
                 <ul class="custom-list">
                    <li>
                        <b>Video BIOS</b> :‌ شامل یک <b>BIOS</b> است که در یک تراشه‌س ROM ذخیره می‌شود و بین کارت گرافیک و نرم‌افزار‌هایی مانند سیتم عامل و برنامه‌های کاربری ارتباط برقرار می‌کند
                    </li>
                    <li><b>GPU</b> :‌ که VPU یا Video chipset نیز نامیده می‌شود، <b>کمک پردازنده‌ای</b> است که با انجام پردازش‌های پیچیده‌ی تصاویر به <a href="">پردازنده‌ی اصلی</a> کامپیوتر (CPU) کمک می‌کند. GPU تنها پردازش‌های مربوط به نمایش تصاویر را انجام می‌دهد و پردازش روند برنامه‌ها بر عهده‌ی CPU می‌باشد.</li>
                    <p> 
                        <span class="glyphicon glyphicon-info-sign"></span>GPU بدلیل انجام پردازش‌های سنگین <b>حرارت زیادی</b> تولید می‌کند، بنابرین یک <a href="">Heat sink</a> یا فن برای خنک کردن بهتر GPU بروی آن قرار می‌دهند.
                    </p>
                    <li>
                        <b>Video RAM</b> : تمامی کارت‌های ویدیو دارای نوعی DRAM خاص به نام video RAM هستند، و برای ذخیره‌ی تصاویر هنگام پردازش آن‌ها توسط GPU مورد استفاده قرار میگیرد. برای اجرای هر برنامه یا بازی خاص در سیستم به مقدار مشخصی از Video RAM نیاز می‌باشد. (به راهنمای حداقل سیستم مورد نیاز هر بازی مراجعه کنید)
                    </li>
                    <li><b>RAMDAC</b> : تمامی داده‌ها در کامپیوتر، دیجیتالی هستند حال آنکه تمامی مانیتور‌‌های CRT و برخی LCDها تنها سیگنال‌های آنالوگ را نمایش می‌دهند. مداری که تصاویر دیجیتال تولید شده توط GPU را به سیگنال‌های <b>آنالوگ</b> تبدیل می‌نماید، مدار RAMDAC نامیده می‌شود.</li>
                 </ul>
                 <p>
                    <span class="glyphicon glyphicon-info-sign"></span>در کارت‌های گرافیک (ویدیو) امروزی معمولا مدار‌های Video BIOS و RAMDAC درون تراشه‌ی GPU قرار می‌گیرند.
                 </p>
                 <h4>پورت‌های کارت گرافیک</h4>
                 <p>
                    در قسمت پنل پشتی کارت گرافیک برخی از پورت‌های زیر قابل دسترس هست
                 </p>
                 <ul>
                    <div class="row">
                        <div class="col-xs-6">
                            <li><a href=""><b>پورت VGA</b></a></li>
                            <li><a href=""><b>پورت DVI</b></a></li>
                        </div>
                        <div class="col-xs-6">
                            <li><a href=""><b>S-video</b></a></li>
                            <li><a href=""><b>HDMI</b></a></li>
                        </div>
                    </div>
                 </ul>
                {{--  related links  --}}
                <div id="related-links">
                    <a href="{{url('tutorial/graphic/فناوری-SLI')}}">فناوری SLI</a>
                    <a href="{{url('tutorial/graphic/فناوری-CrossFire')}}">فناوری CrossFire</a>
                </div>
            </div>
        </div>
    </div>
@endsection