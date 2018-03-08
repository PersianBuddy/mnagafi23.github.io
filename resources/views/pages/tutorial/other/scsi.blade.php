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
                 <h3>اینترفیس SCSI  یا اسکازی</h3>
                 <p>
                        SCSI یا <b>اسکازی</b> (Scuzzy) کوتاه شده‌ی عبارت Small Computer System Interface یک اینترفیس است که برای اتصال هارد درایو و درایو‌های نوری (بعنوان جایگزین کانکتور <a href="">IDE</a>) به سیستم مورد استفاده قرار می‌گیرند. کانکتور SCSI بروی کارت SCSI قرار می‌گیرد. (برخی <a href="">مادربورد</a>‌ها به طور پیش فرض دارای این کانکتور هستند)
                 </p>
                 <img class="img-responsive" alt="کارت SCSI" style="max-width:600px;" src="/images/md/other/کارت-scsi.jpg">
                 <h4>مزایای SCSI نسبت به IDE و <a href="">SATA</a></h4>
                 <ul class="custom-list">
                    <li>یک کانکتور SCSI می‌تواند <b>۷ یا ۱۵ ذخیره‌ساز</b> (بسته به نوع ۸ بیتی و ۱۶ بیتی بودن) رابه سیستم متصل کند، در صورتی که در اینترفیس‌های دیگر کمتر است. (برای مثال هر کانکتور IDE می‌تواند تنها ۲ ذخیره‌ساز را به سیستم متصل کند.)</li>
                    <li>SCSI از <b>ذخیره‌ساز‌های اکسترنال</b> نیز پشتیبانی می‌کند. (البته نوع اکسترنال SATA (<a href="">eSATA</a>) نیز ذخیره‌ساز‌های اکسترنال را پشتیبانی می‌کند)</li>
                    <li>برخی انواع SCSI سرعت‌ انتقال بالا با پهنای باند <b>۶۴۰ مگابایت در ثانیه</b> دارند.</li>
                    <li>وابستگی ذخیره‌ساز‌های SCSI به پردازنده برای انجام عملیات خود، بسیار کمتر است که باعث افزایش توان پردازنده برای انجام عملیات‌های دیگر سیستم می‌شود.</li>
                 </ul>
                 <p>
                    <span class="glyphicon glyphicon-info-sign"></span>با وجود مزایای بالای SCSI بدلیل <b>قیمت بال</b>ا (۴ تا ۱۰ برابر) در سیستم‌های امروزه متداول نیستند و جای خود را به <b>SATA</b> داده‌اند.
                 </p>
                 <h4>استاندارد‌‌های SCSI</h4>
                 <p>
                        وسایل و کنترلر‌های SCSI با استاندارد‌های مختلفی طراحی و تولید می‌شوند که از نظر <b>سرعت</b> تفاوت چشمگیری با یکدیگر دارند. در جدول زیر انواع و مشخصات این استاندارد‌ها نمایش داده شده است.
                 </p>
                 <table class="table table-bordered table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>نام استاندارد</th>
                            <th>مشخصه</th>
                            <th>پهنای گذرگاه (bit)</th>
                            <th>پهنای باند (MB/s)</th>
                            <th>تعداد وسایل قابل پشتیبانی</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Narrow SCSI</td>
                            <td>SCSI-1</td>
                            <td>8</td>
                            <td>5</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Fast SCSI</td>
                            <td>SCSI-2</td>
                            <td>8</td>
                            <td>3</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Fast-Wide SCSI</td>
                            <td>SCSI-2</td>
                            <td>16</td>
                            <td>3</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Ultra SCSI</td>
                            <td>SCSI-3</td>
                            <td>8</td>
                            <td>20</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Ultra Wide SCSI</td>
                            <td>SCSI-3</td>
                            <td>16</td>
                            <td>40</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Ultra2 SCSI</td>
                            <td>SCSI-3</td>
                            <td>8</td>
                            <td>40</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Ultra2 Wide SCSI</td>
                            <td>SCSI-3</td>
                            <td>16</td>
                            <td>80</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Ultra3 SCSI</td>
                            <td>SCSI-3</td>
                            <td>16</td>
                            <td>160</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Ultra-320 SCSI</td>
                            <td>SCSI-3</td>
                            <td>16</td>
                            <td>320</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Ultra-640 SCSI</td>
                            <td>SCSI-3</td>
                            <td>16</td>
                            <td>640</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                 </table>
                 <h4>کانکتور‌‌ها و کابل‌های SCSI</h4>
                 <p>
                        در اینترفیس SCSI بسته به نوع استاندارد و اکسترنال/اینترنال بودن قطعه از کانکتور‌های مختلفی استفاده می‌شود. (یکی از دلایل <b>محبوبیت پایین</b> SCSI همین ویژگی می‌باشد)
                 </p>
                 <ul class="custom-list">
                     <li>برای اتصال وسایل اینترنال در استاندارد SCSI-1 و SCSI-2 در وسایل <a href="">۸ بیتی</a> از کانکتور <b>۵۰ پین</b> berg و برای وسایل <a href="">۱۶ بیتی</a> از کانکتور<b> ۶۸ پین berg</b>، استفاده می‌شود.</li>
                     <img class="img-responsive" alt="کانکتور ۵۰ پین برای استاندارد SCSI-1" style="max-width:400px;" src="/images/md/ports/کانکتور-۵۰-پین-scsi-1.jpg">
                     <li>در استاندارد SCSI-3 برای وسایل اینترنال ۸ بیتی، از کانکتور <b>۵۰ پین</b> mini-D shell و برای وسایل ۱۶ بیتی از نوع <b>۶۸ پین</b> آن استفاده می‌شود. به کانکتور‌های mini-D shell، اصطلاحاً <b>High Density</b> نیز گفته می‌شود.</li>
                     <div class="row" style="margin-top:2em;">
                        <div class="col-sm-6">
                            <figure>
                                <figcaption class="text-center">
                                    کانکتور ۵۰ پین High Density
                                </figcaption>
                                <img class="img-responsive" alt="کانکتور ۵۰ پین High Density" style="width:90%; max-width:400px;" src="/images/md/ports/کانکتور-۵۰-پین-hd-scsi.jpg">
                            </figure>
                        </div>
                        <div class="col-sm-6">
                            <figure>
                                <figcaption class="text-center">
                                    کانکتور ۶۸ پین High Density
                                </figcaption>
                                <img class="img-responsive" alt=" کانکتور ۶۸ پین High Density" style="width:90%; max-width:400px;" src="/images/md/ports/کانکتور-۶۸-پین-hd-scsi.jpg">
                            </figure>
                        </div>
                     </div>
                     
                     <li>در برخی درایو‌های SCSI داخل، به جای استفاده از کانکتور High Density ۶۸ پین از یک کانکتور <b>۸۰ پین</b> به نام <b>SCA</b> استفاده می‌شود. این نوع درایوها برق مورد نیاز خود را نیز از کانکتور SCA تامین می‌کنند. (انواع دیگر از کانکتور <a href="">Molex</a> استفاده می‌کنند)</li>
                     <img class="img-responsive" alt="کانکتور هشتاد پین SCA" style="max-width:400px;" src="/images/md/ports/کانکتور-۸۰-پین-sca-scsi.jpg">
                     <p>
                        <span class="glyphicon glyphicon-info-sign"></span>وسیله‌ای به نام آداپتور SCA وجود دارد که کانکتور SCA را به High Density تبدیل می‌کند.
                     </p>
                     <li>برای اتصال وسایل اکسترنال در استاندارد SCSI-1 از کانکتور ۵۰ پین <b>C50</b> استفاده می‌شود. در استاندارد SCSI-2 و SCSI-3 برای وسایل ۸ بیتی، از کانکتور  ۵۰ پین High Density و برای وسایل ۱۶ بیتی از نوغ ۶۸ پین آن استفاده می‌شود.</li>
                     <img class="img-responsive" alt="کانکتور اکسترنال استاندارد SCSI-1" style="max-width:400px;" src="/images/md/ports/کانکتور-اکسترنال-c50-scsi.jpg">
                 </ul>
                 <h4>SCSI terminator</h4>
                 <p>
                        برای جلوگیری از <b>بازگشت و تداخل سیگنال‌ها</b>، انتهای زنحیره‌ی SCSI باید مسدود گردد. این عمل به وسیله ترمینیتور (terminator) انجام می‌شود. ترمینیتور‌ها به یکی از روش‌های زیر به گذرگاه SCSI اعمال می‌شوند.
                 </p>
                 <ul class="list-number">
                    <li>نصب <b>قطعه‌ی ترمینیتور</b> به کانکتور SCSI out مربوط به قطعه‌ی انتهایی زنجیره‌</li>
                    <img class="img-responsive" alt="ترمینیتور SCSI" style="max-width:400px;" src="/images/md/other/scsi-terminator.jpg">
                    <li>تنظیم <b>جامپر</b> مربوط به پایان‌دهی در قطعه‌ی انتهایی زنجیره‌ی SCSI </li>
                    <li>３-	در برخی ذخیره کننده‌ها به صورت <b>خودکار</b> در آخرین قطعه ترمینیتور فعال می‌شود و هیچ تنظیمی مورد نیاز نیست.</li>
                 </ul>
                 <h4>روش‌های سیگنال دهی</h4>
                 <p>
                        کنترلر‌ها و ذخیره‌کننده‌ها از روش‌های مختلفی برای <b>ارسال سیگنال‌هایشان</b> استفاده می کنند که این روش‌ها در زیر آمده است.
                 </p>
                 <ul class="list-group">
                    <li class="list-group-item">
                            <b>Single-ended</b> : در این روش (روش یک طرفه) در کنار هر سیم سیگنال، یک سیم <b>اتصال به زمین</b> قرار گرفته تا از تداخل الکترومغناطیسی بین سیم‌ها کاسته شود. بیشینه طول زنجیره در این روش ۳ متر است.
                    </li>
                    <li class="list-group-item">
                            <b>LVD</b> :‌ در روش Low Voltage Differential در کنار هر سیم سیگنال یک سیم با سیگنال معکوس قرار داده می‌شود. در این روش از ولتاژ <b>۳.۳ ولت</b> استفاده می‌شود و بیشنه طول زنجیره ۱۲ متر می‌باشد.
                    </li>
                    <li class="list-group-item">
                            <b>HVD</b> : روش High Voltage Differential  همانند روش LVD است با این تفاوت که در این روش از ولتاژ <b>۵ ولت</b> استفاده می‌شود و بیشینه طول کابل ۲۵ متر است.
                    </li>
                 </ul>
                 <p>
                    <span class="glyphicon glyphicon-info-sign"></span>وسایلی که دارای علامت <b>LVD/MSE</b> می‌باشند با هر دو روش SE و LVD سازگار هستند
                 </p>
                 <p>
                    <span class="glyphicon glyphicon-alert"></span>اتصال وسایل SCSI با روش‌های سیگنال‌دهی متفاوت به یکدیگر باعث <b>سوختن</b> آن‌ها می‌شود.
                 </p>
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection