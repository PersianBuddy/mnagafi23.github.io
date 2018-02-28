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
                <h3>سوکت‌های پردازنده (CPU socket)</h3>
                <p>
                        سوکت <a href="">پردازنده</a> یا CPU Socket قسمتی از مادربورد است که برای اتصال پردازنده به <a href="">مادربورد</a> مورد استفاده قرار می‌گیرد.
                </p>
                <p>
                        شرکت های <a href="">اینتل</a> Intel و <a href="">AMD</a> تولید‌کنندگان اصلی پردازده‌ها هستند و پردازنده‌های هر شرکت سوکت‌های مخصوص خود را دارند و سوکت‌های شرکت دیگر را ساپورت نمی‌کنند.
                </p>
                <figure>
                    <figcaption class="text-center">
                        تصویر سوکت پردازنده اینتل
                    </figcaption>
                    <img class="img-responsive" alt="سوکت پردازنده اینتل و AMD" src="/images/md/motherboard/سوکت-پردازنده-اینتل.jpg">
                </figure>
                <h4>اتصالات سوکت پردازنده</h4>
                <p>
                        سوکت‌های پردازنده بسته به شرکت سازنده یا نوع سوکت تعداد و نحوه چینش اتصالات در آن‌‌ها متفاوت است. در برخی از سوکت‌ها اتصالات  یک در میان کنار هم قرار می‌گیرند که به آن آرایش شطرنجی (staggered) گفته می‌شود. در انواع دیگری از سوکت‌های پردازنده اتصالات از  جهت سطر . ستون منظم می‌شوند . در کنار هم قرار می‌گیرند که آرایش آرایه‌ای (array) نامیده می‌شوند.
                </p>
                <div class="row">
                    <div class="col-xs-6">
                        <figure>
                                <figcaption class="text-center">
                                    چینش شطرنجی اتصالات سوکت پردازنده
                                </figcaption>
                                <a href="/images/xl/motherboard/سوکت-پردازنده-اتصالات-شطرنجی.jpg"><img class="img-responsive" alt="چینش شطرنجی اتصالات سوکت پردازنده" src="/images/md/motherboard/سوکت-پردازنده-اتصالات-شطرنجی.jpg"></a>
                        </figure>
                    </div>
                    <div class="col-xs-6">
                        <figure>
                                <figcaption class="text-center">
                                        چینش آرایه‌ای اتصالات سوکت پردازنده
                                </figcaption>
                                <a href="/images/md/motherboard/اتصالات-آرایه‌-سوکت-پردازنده.jpg"><img class="img-responsive" alt="چینش آرایه‌ای اتصالات سوکت پردازنده" src="/images/md/motherboard/اتصالات-آرایه‌-سوکت-پردازنده.jpg"></a>
                        </figure>
                    </div>
                </div>
                <p>
                        برخی سوکت‌های پردازنده دارای سوراخ بوده و اتصالات پردازنده درون سوراخ‌ها قرار می‌گیرند، اما انواع جدیدتر دارای پین هستند و پردازند‌های قابل نصب بروی آن‌ها نیز دارای  پد (pad) هستند .
                </p>
                <div class="row">
                    <div class="col-xs-6">
                        <figure>
                                <figcaption class="text-center">
                                    اتصالات از نوع پین
                                </figcaption>
                                <a href="/images/xl/motherboard/سوکت-پردازنده-دارای-پین.jpg"><img class="img-responsive" title="برای مشاهده تصویر بزرگ کلیک کنید" alt="سوکت پردازنده با اتصالات از نوع پین" src="/images/md/motherboard/سوکت-پردازنده-دارای-پین.jpg"></a>
                        </figure>
                    </div>
                    <div class="col-xs-6">
                        <figure>
                                <figcaption class="text-center">
                                        سوکت پردازنده دارای سوراخ
                                </figcaption>
                                <a href="/images/md/motherboard/سوکت-پردازنده-دارای-سوراخ.jpg"><img class="img-responsive" alt="سوکت پردازنده دارای سوراخ" src="/images/md/motherboard/سوکت-پردازنده-دارای-سوراخ.jpg"></a>
                        </figure>
                    </div>
                </div>
                <h4>انواع سوکت‌های پردازنده اینتل</h4>
                <ul class="list-number">
                    <div class="row">
                        <div class="col-sm-6">
                            <li><a href=""> Socket 7</a></li>
                            <li><a href=""> PGA 370</a></li>
                            <li><a href=""> Socket 423</a></li>
                            <li><a href=""> mPGA 478B</a></li>
                            <li><a href=""> LGA 775</a></li>
                        </div>
                        <div class="col-sm-6">
                            <li><a href=""> LGA 1156</a></li>
                            <li><a href=""> LGA 1155</a></li>
                            <li><a href=""> LGA 1150</a></li>
                            <li><a href=""> LGA 1366</a></li>
                            <li><a href=""> LGA 2011</a></li>
                        </div>
                    </div>
                </ul>
                <h4>پردازنده‌های قابل پشتیبانی اینتل</h4>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>سوکت</th>
                            <th>پردازنده‌های قابل پشتیبانی</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Socket 7</td>
                            <td><a href="">Pentium</a>, <a href="">Pentium MMX</a></td>
                        </tr>
                        <tr>
                            <td>Socket 370</td>
                            <td><a href="">Celeron</a>, <a href="">Interl Pentium III</a></td>
                        </tr>
                        <tr>
                            <td>Socket 423</td>
                            <td><a href="">Pentium 4</a></td>
                        </tr>
                        <tr>
                            <td>Socket 478</td>
                            <td>Celeron, Pentium 4, <a href="">Pentium 4 M</a></td>
                        </tr>
                        <tr>
                            <td>LGA 775</td>
                            <td>Pentium 4, <a href="">Pentium D</a>, Celeron, <a href="">Celeron D</a>, <a href="">Core 2 Duo</a>, <a href="">Core 2 Quad</a></td>
                        </tr>
                        <tr>
                            <td>LGA 1156</td>
                            <td><a href="">Core i</a>7 (800 <a href="">series</a>), Core i5 (700,600 series), Core i3 (500), <a href="">Celeron G1000 series</a></td>
                        </tr>
                        <tr>
                            <td>LGA 1155</td>
                            <td>Core i3, Core i5 , Core i7 (<a href="">نسل</a> دوم و سوم)</td>
                        </tr>
                        <tr>
                            <td>LGA 1150</td>
                            <td>Core i3, Core i5 (نسل چهارم), Core i7 (نسل چهارم و پنجم)</td>
                        </tr>
                        <tr>
                            <td>LGA 1366</td>
                            <td>Core i7 900 series </td>
                        </tr>
                        <tr>
                            <td>LGA 2011</td>
                            <td>Core i7 3xxx Sandy Bridge-E, Core i7 4xxx Ivy Bridge-E</td>
                        </tr>
                    </tbody>
                </table>
                
                {{--  related links  --}}
                <div id="related-links">

                </di>
                 
                
            </div>
        </div>
    </div>
@endsection