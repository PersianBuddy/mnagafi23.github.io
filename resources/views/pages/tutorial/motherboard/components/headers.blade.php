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
                <h3>هدر‌های مادربورد</h3>
                <p>
                    این نوع کانکتور‌ها برای اتصال پورت‌‌های جلوی کیس به مادربورد بکار می‌روند.
                </p>
                <a href="/images/xl/motherboard/هدرهای-جلوی-کیس-مادربورد.jpg" target="_blank">
                    <img class="img-responsive" alt="هدر‌های پروت‌های جلوی کیس بروی مادربورد"  title="برای مشاهده تصویر بزرگ کلیک کنید" src="/images/md/motherboard/هدرهای-جلوی-کیس-مادربورد.jpg">
                </a>
                <h4>هدر USB 2.0 و ۱۳۹۴</h4>
                <p>
                    هدر USB و ۱۳۹۴ کانکتور‌های دارای پین بروی مادربورد هستند، که برای افزودن اتصالات اضافی ۱۳۹۴ و USB به کامپیوتر بکار می‌روند. برای مثال اتصالات USB 2.0 جلوی مادربورد به هدر USB 2.0 مادربورد متصل می‌شوند.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <figure>
                            <figcaption class="text-center">کابل هدر usb 2.0</figcaption>
                            <img class="img-responsive" style="max-width: 400px;" alt="کابل هدر USB 2.0" src="/images/md/motherboard/کابل-هدر-usb2.jpg">
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <figure>
                            <figcaption class="text-center">کابل هدر ۱۳۹۴</figcaption>
                            <img class="img-responsive" alt="کابل هدر ۱۳۹۴" style="max-width: 300px;" src="/images/md/motherboard/کابل-هدر-1394.jpg">
                        </figure>
                    </div>
                </div>
                <p>
                    همانطور که در تصویر مشاهده می‌کنید، هر دو هدر ۱۳۹۴ و هدر USB 2.0 کاملاً مشابه یکدیگرند و دارای ۹ پین هستند. البته دربرخی از مادربورد‌ها این هدر‌ها دارای ۴ یا ۵ پین نیز می‌باشند (به دفترچه راهنمای مادربورد مراجعه شود).
                </p>
                <p>
                    <span class="glyphicon glyphicon-alert"></span>اتصال کابل هدر USB 2.0 به هدر 1394 مادربورد و بلعکس به مادربورد اسیب می‌رساند.
                </p>
                <h4>هدر USB 3.0</h4>
                <p>این هدر در مادربورد‌‌های جدید‌تر وجود دارد و کاملا با هدر USB 2.0 فرق دارد.</p>
                <img class="img-responsive" alt="کابل هدر USB 3.0" style="max-width: 450px;" src="/images/md/motherboard/کابل-هدر-usb3.jpg">
                <h4>هدر صدا Audio Header</h4>
                <p>
                    هدر صدا همانند هدر USB یک هدر ۹ پینی است که برای اتصال قطعاتی همچون میکروفون و هدفون در جلوی مادربورد مورداستفاده قرار می‌گیرد.
                </p>
                <img class="img-responsive" alt="کابل هدر صدا و USB 2.0" style="max-width: 450px;" src="/images/md/motherboard/کابل-هدر-صدا-usb.jpg">

                
                
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection