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
                 <h3>فناوری CrossFire</h3>
                 <p>
                        فناوری CrossFire معادل فناوری <a href="">SLI</a> است. و توسط شرکت <b>ATI</b> ابداع شده است. این فناوری برای <b>پردازش موازی</b> تصاویر توسط چند <a href="">کارت گرافیک</a> استفاده میشود.
                 </p>
                 <p>
                    <span class="glyphicon glyphicon-info-sign"></span>مزیت CrossFire نسبت به SLI در این است که در این فناوری نیازی به شباهت GPU‌ها نیست و همین که کارت‌های گرافیک از <b>یک خانواده</b> باشند کفایت می‌کند.
                 </p>
                 <img class="img-responsive" alt="فناوری CrossFire" style="max-width:600px;" src="/images/md/graphic/فناوری-crossfire.jpg">
                 <h4>نسل‌های مختلف CrossFire</h4>
                <ul class="custom-list">
                    <li>
                        <b>First Generation CrossFire</b> : در این نسل کارت master (کارت اصلی متصل به <a href="">مانیتور</a>) باید از نوع خاصی به نام CrossFire edition باشد و کارت slave (کارت گرافیک دیگر)، به وسیله‌ی یک <b>کابل اکسترنال</b> و از طریق کانکتور ویژه‌ای به نام VHDCI به کارت master متصل می‌شود.
                    </li>
                    <li><b>Native CrossFire</b> : در این نسل دو کارت از طریق کابلی به نام <b>bridge</b> یه یکدیگر متصل می‌شوند</li>
                    <li><b>CrossFire X</b> : در این نسل، می‌توان <b>چهار کارت</b> ویدیو را به صورت موازی به یکدیگر متصل کرد. هر کارت دارای دو پد است که بوسیله‌ی آن به دو کارت مجاور خود متصل می‌شود.</li>
                    <span class="glyphicon glyphicon-info-sign"></span>‌در <a href="">مادربورد</a>‌هایی که از CrossFire پشتیبایی می‌کنند نیازی به کابل bridge برای اتصال کارت‌های گرافیک نمی‌باشد. و این اتصال به اسلات‌های <a href="">PCI-Express</a> منتقل شده است.
                    <li><b>Hybrid CrossFire</b> : معادل فناوری <a href="">GeForce Boost</a> است و به کارت گرافیک این امکان را می‌دهد تا به طور موازی با مادربورد به پردازش تصاویر بپردازد.</li>
                </ul>
                <p>
                    <span class="glyphicon glyphicon-alert"></span>: فناوری‌های SLI و CrossFire مقدار <b>برق مصرفی سیستم</b> را زیاد و  دمای زیادی تولید می‌کنند. همچنین <b>بازده‌ی</b> این فناوری‌ها پایین است.
                </p>
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection