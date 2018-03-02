@extends('layouts.app')

@section('title')
   آشنایی با اجزای مادربورد و انواع آن
@endsection
@section('description')
فرم فاکتور (form factor) چیست و انواع آن کدام اند؟ تفاوت فرم فاکتورها در چیست؟ | آشنایی با اجزای مادربورد | مادربورد مناسب کیس من کدام است؟
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('includes.tutorial_side_nav')
            </div>
            
            <div class="col-sm-9 page-content">
                   <div id="motherboard-overview" >
                        <h2>مادربورد چست؟</h2>
                        <p>
                                مادربورد با نام ها دیگر main board، system board و planer board، بزرگترین برد در داخل کیس است و تقریباً تمامی گذرگاه ها روی آن قرار دارد و وظیفه‌ی اصلی آن ایجاد ارتباط بین تمامی قطعات کامپیوتر می‌باشد. 
                        </p>
                        <p>
                         یک مادربورد به روایت تصویر  ASUS P5AD2-E:
                        </p>
                        <a href="/images/xl/motherboard/اجزای-مادربورد.jpg">
                            <img alt="اجزای یک مادربورد" title="برای مشاهده تصویر بزرگ کلیک کنید" class="img-responsive" src="/images/md/motherboard/اجزای-مادربورد.jpg">
                        </a>
                  </div> 

                  <div  id="motherboard-components">
                        <h2>اجزای یک مادربورد</h2>
                        <p>
                            در زیر لینک مربوط به اجزای یک مادربورد مدرن نمایش داده شده است.
                            
                        </p>
                        <p>
                            برای نمایش تصویر با‌کیفیت روی تصویر بالا کلیک کنید...
                        </p>
                        <ul>
                            <div class="row">
                                <div class="col-md-6">
                                    <li>1- <a href="{{url('/tutorial/motherboard/components/اسلات-توسعه')}}"> اسلات توسعه</a> ( <a href="{{url('tutorial/motherboard/components/اسلات-pci')}}">PCI</a> , <a href="{{url('tutorial/motherboard/components/اسلات-pci-express')}}">PCI Express</a> , <a href="{{url('tutorial/motherboard/components/اسلات-agp')}}">AGP</a> )</li>
                                    <li>2- <a href="{{url('/tutorial/motherboard/components/فن-کیس')}}">کانکتور فن</a></li>
                                    <li>3- <a href="{{url('/tutorial/motherboard/components/پنل-پشت-مادربورد')}}">پنل پشت مادربورد</a></li>
                                    <li>4- <a href="{{url('/tutorial/motherboard/components/heat-sink')}}">Heat Sink</a></li>
                                    <li>5- <a href="{{url('/tutorial/motherboard/components/کانکتور-p4-پاور')}}">کانکتور ۴ پین پاور (P4 یا 4-pin)</a></li>
                                    <li>8- <a href="{{url('/tutorial/motherboard/components/سوکت-پردازنده')}}">سوکت پردازنده (CPU socket)</a></li>
                                    <li>9- <a href="{{url('/tutorial/motherboard/components/northbridge-چیست')}}">Northbridge</a></li>
                                    <li>12- <a href="{{url('/tutorial/motherboard/components/اسلات-رم')}}">اسلات‌های حافظه (memory slots)</a></li>
                                    <li>13- <a href="{{url('/tutorial/motherboard/components/super-io-چیست')}}">Super I/O</a></li>
                                    <li>16- <a href="{{url('/tutorial/motherboard/components/کانکتور-ide')}}">کانکتور IDE یا ATA</a></li>
                                    <li>17- <a href="{{url('/tutorial/motherboard/components/کانکتور-پاور-فرم-atx')}}">کانکتور ۲۴ پین پاور</a></li>
                                    <li>18- <a href="{{url('/tutorial/motherboard/components/southbridge-چیست')}}">South Bridge</a></li>
                                    <li>19- <a href="{{url('/tutorial/motherboard/components/SATA-چیست')}}">کانکتور SATA</a></li>
                                </div>
                                <div class="col-md-6">
                                    
                                    <li>20- <a href="{{url('/tutorial/motherboard/components/CMOS-چیست')}}">باتری ذخیره مادربورد (CMOS)</a></li>
                                    <li>21- <a href="{{url('/tutorial/motherboard/components/RAID-چیست')}}">RAID</a></li>
                                    <li>22- <a href="{{url('/tutorial/motherboard/components/کانکتور-پنل-جلو-کیس')}}">کانکتور‌های پنل جلوی کیس</a></li>
                                    <li>23- <a href="">FWH</a></li>
                                    <li>24- <a href="">کانکتور پورت سریال (Serial Port connector)</a></li>
                                    <li>25- <a href="">هدر USB</a></li>
                                    <li>26- <a href="">جامپر (Jumpers)</a></li>
                                    <li>27- <a href="">ای‌سی (Integrated circuit)</a></li>
                                    <li>28- <a href="">هدر ۱۳۹۴</a></li>
                                    <li>29- <a href="">SPDIF</a></li>
                                    <li>30- <a href="">CD-IN</a></li>
                                </div>
                            </div>
                        </ul>
                  </div>
                <div id="form-factor">
                    <h2>
                        فرم فاکتور (Form Factor)
                    </h2>
                    <p>
                            به اندازه، شکل و نحوه‌س چینش (layout) اجزای یک قطعه‌‌ی سخت‌افزاری فرم فاکتور (form factor ) گفته می‌شود که در برخی قطعات مانند ذخیره سازها و بورد‌ها استاندارد شده‌اند تا به طور صحیح در کنار قطعات دیگر قرار گرفته و نصب شوند.
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-hand-left"></span> توجه داشته باشید که کیس و پاور (power supply) نیز باید از فرم فاکتور مادربورد پشتیبانی کنند.
                    </p>
                    <h4>انواع متداول فرم فاکتور برای مادربورد‌ها عبارت‌ اند از: </h4>
                    <ul>
                        <li><a href=""><span class="glyphicon glyphicon-link"></span> ATX<a><li>
                        <li><a href=""><span class="glyphicon glyphicon-link"></span> Flex ATX<a><li>
                        <li><a href=""><span class="glyphicon glyphicon-link"></span> Mini-ITX<a><li>
                        <li><a href=""><span class="glyphicon glyphicon-link"></span> BTX<a><li>
                        <li><a href=""><span class="glyphicon glyphicon-link"></span> micro ATX<a><li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
@endsection