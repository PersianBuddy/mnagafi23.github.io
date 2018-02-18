@extends('layouts.app')

@section('title')
   آشنایی با اجزای مادربورد و انواع آن
@endsection
@section('description')
فرم فاکتور (form factor) چیست و انواع آن کدام اند؟ تفاوت فرم فاکتورها در چیست؟ | آشنایی با اجزای مادربورد | مادربورد مناسب کیس من کدام است؟
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
@endsection

@section('content')
    <div class="container">
            
        <div class="row">
            <div  class="col-sm-3">
                <div id="tutorial-side-nav">
                    <h4>راهنمای سایت</h4>
                    <ul>
                        
                        <li><a href="">کارت گرافیک</a></li>
                        <li><a class="has-sub" href="">مادربورد </a>
                            <ul>
                            
                            <li><a href="">اجزا</a> </li>
                            <li><a href="">انواع</a>
                                <ul>
                                    <li><a href="">مورد اول</a></li>
                                    <li><a href="">مورد دوم</a></li>
                                    <li><a href="">مورد سوم</a></li>
                                </ul>
                            </li> 
                            <li><a href="">اقسام :)</a> </li>
                            </ul>
                        </li>
                        <li><a href="">پردازنده</a></li>
                    </ul>
                </div>
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
                        <a href="/images/xl/motherboard/ASUS_P5AD2-E.jpg">
                            <img class="img-responsive" src="/images/md/motherboard/ASUS_P5AD2-E.jpg">
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
                                    <li><a href="{{url('/tutorial/motherboard/components/expansion-slots')}}"> اسلات توسعه</a> ( <a href="">PCI</a> , <a href="">PCI Express</a> , <a href="{{url('tutorial/motherboard/components/agp')}}">AGP</a> )</li>
                                    <li><a href="">کانکتورهای فن (3-pin fan conectorors)</a></li>
                                    <li><a href="">کانکتورهای پشت مادربورد</a></li>
                                    <li><a href="">Heat Sink</a></li>
                                    <li><a href="">کانکتور ۴ پین پاور (P4 یا 4-pin)</a></li>
                                    <li><a href="">Inductor</a></li>
                                    <li><a href="">خازن (Capacitors)</a></li>
                                    <li><a href="">سوکت پردازنده (CPU socket)</a></li>
                                    <li><a href="">Northbridge</a></li>
                                    <li><a href="">کانکتور ۴ پین فن پردازنده</a></li>
                                    <li><a href="">مدل مادربورد</a></li>
                                    <li><a href="">اسلات‌های حافظه (memory slots)</a></li>
                                    <li><a href="">Super I/O</a></li>
                                    <li><a href="">محل نصب پیچ‌ها</a></li>
                                    <li><a href="">کانکتور فلاپی (Flopy connector)</a></li>
                                </div>
                                <div class="col-md-6">
                                     <li><a href="">IDE connector</a></li>
                                    <li><a href="">کانکتور ۲۴ پین پاور</a></li>
                                    <li><a href="">South Bridge</a></li>
                                    <li><a href="">کانکتور SATA</a></li>
                                    <li><a href="">باتری ذخیره مادربورد (CMOS)</a></li>
                                    <li><a href="">RAID</a></li>
                                    <li><a href="">Front Panel connectors/system panel connectors</a></li>
                                    <li><a href="">FWH</a></li>
                                    <li><a href="">کانکتور پورت سریال (Serial Port connector)</a></li>
                                    <li><a href="">هدر USB</a></li>
                                    <li><a href="">جامپر (Jumpers)</a></li>
                                    <li><a href="">ای‌سی (Integrated circuit)</a></li>
                                    <li><a href="">هدر ۱۳۹۴</a></li>
                                    <li><a href="">SPDIF</a></li>
                                    <li><a href="">CD-IN</a></li>
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