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
                 <div id="agp-overview">
                    <h3>AGP</h3>
                    <p>
                            گذرگاه AGPیا  Accelerated Graphics Port یک گذرگاه اختصاصی و بهینه شده برای <a href="">کارت گرافیک</a> است، که توسط <a href="">اینتل </a> در سال <a href="">۱۹۹۷</a> معرفی شد. AGP  یک اتصال نقطه به نقطه است که </a href="">کارت ویدیو (video card)</a>  را به <a href="">مادربورد</a> متصل می‌کند.
                            در زیر یک نمونه کارت گرافیک مناسب برای اسلات agp را مشاهده می‌کنید
                     </p>
                     <img class="img-responsive" alt="کارت گرافیک قدیمی با اسلات agp" src="/images/md/motherboard/کارت-گرافیک-قدیمی-agp.png">
                     <h4>این گذرگاه نسبت به<a href=""> PCI</a> دو مزیت دارد:</h4>
                     <ul>
                            
                        <li>به کارت ویدیو این امکان را می‌دهد تا از پهنای باند کامل گذرگاه استفاده کند.</li>
                        <li>کارت متصل شده به AGP مستقیماً داده‌های داخل <a href="">رم (RAM)</a> را بخواند. درصورتی که در PCI باید ابتدا داده‌‌های کارت ویدیو، کپی و سپس خوانده شود.</li>
                        <p>
                                <span class="glyphicon glyphicon-hand-left"></span> به مقدار حافظه‌ی سیستم قابل دسترس برای AGP، aperture گفته می‌شود و مقدار آن در <a href="">تنظیمات بایوس </a>(BIOS setup) قابل تنظیم است.
                            </p>
                     </ul>
                     <img class="img-responsive" alt="اسلات agp" src="/images/md/motherboard/اسلات-agp.jpg">
                     <h4>در زیر چهار نوع گذرگاه AGP نمایش داده شده است:</h4>
                     <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>نوع AGP</th>
                                <th><a href="">سرعت ساعت (MHz)</a></th>
                                <th>انتقال داده در هر <a href="">سیکل ساعت</a></th>
                                <th>پهنای گذرگاه (bit)</th>
                                <th>سرعت انتقال داده‌ها (MB/s)</th>
                            <tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AGP 1x</td>
                                <td>66</td>
                                <td>1</td>
                                <td>32</td>
                                <td>266</td>
                            </tr>
                            <tr>
                                <td>AGP 2x</td>
                                <td>66</td>
                                <td>2</td>
                                <td>32</td>
                                <td>533</td>
                            </tr>
                            <tr>
                                <td>AGP 4x</td>
                                <td>66</td>
                                <td>4</td>
                                <td>32</td>
                                <td>1066</td>
                            </tr>
                            <tr>
                                <td>AGP 8x</td>
                                <td>66</td>
                                <td>8</td>
                                <td>32</td>
                                <td>2133</td>
                            </tr>
                        </tbody>
                     </table>
                     <h4>ولتاژ ورودی</h4>
                     <p>
                            برخی اسلات‌ ها و کارت‌های AGP با ولتاژ ۳.۳ ولت و برخی با ولتاژ ۱.۵ ولت کار کرده و برخی هر دو را پستیبانی می‌کنند. این تفاوت را می‌توان از محل قرارگیری notch بروی اسلات متوجه شد، اسلات های بدون notch هردو ولتاژ را پشتیبانی کرده و AGP Universal نامیده می‌شوند.
                     </p>
                     <p>
                            کارت ها و اسلات هایی هم به نام AGP Pro نیز ارائه شده‌اند که دارای پین‌های اضافه در دو انتهای اسلات و کارت هستند که به کارت گرافیک این امکان را می دهد که با سرعت بالاتر و مصرف برق بیشتری کار کند.
                            این نوع AGP با انواع دیگر سازکاری دارد.
                            
                     </p>
                     <div class="thumbnail">
                        <img src="/images/md/motherboard/انواع-اسلات-agp.jpg" alt="انواع اسلات agp براساس ولتاژ و محل قرارگیری notch" class="img-responsive">
                        <div class="caption">
                            <p>انواع اسلات AGP براساس ولتاژ (لبه‌ی مادربورد سمت چپ قرار گرفته)</p>
                        </div>
                    </div>
                    

                 </div>
                 
                
            </div>
        </div>
    </div>
@endsection