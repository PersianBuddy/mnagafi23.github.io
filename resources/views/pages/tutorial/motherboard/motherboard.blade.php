@extends('layouts.app')

@section('title')
    آشنایی با مادربورد
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 page-index">
                <div class="panel panel-success">
                    <div class="panel-heading">
                    راهنمای شما
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><span class="glyphicon glyphicon-triangle-bottom"></span><a class="disable" href="{{url('/tutorial/motherboard/basics')}}"> مادربورد</a><li>
                                <ul>
                                    <li><span class="glyphicon glyphicon-triangle-left"></span><a href="#motherboard-overview"> مادربورد چیسیت؟</li>
                                    <li><span class="glyphicon glyphicon-triangle-left"></span><a href="#motherboard-components"> اجزای مادربورد</li>
                                    <li><span class="glyphicon glyphicon-triangle-left"></span><a href="#motherboard-overview"> دسته بندی مادربورد</li>
                                    <li><span class="glyphicon glyphicon-triangle-left"></span><a href="#motherboard-overview"> form factor</a></li>
                                </ul>
                            
                        </ul>
                    </div>  
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
                        <ul>
                            <div class="row">
                                <div class="col-md-6">
                                    <li><a href=""> اسلات توسعه (Expansion slots)</a></li>
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
                                    
                                    <li><a href="">کانکتور SATA</a></li>
                                    <li><a href="">باتری ذخیره مادربورد (CMOS)</a></li>
                                    <li><a href="">RAID</a></li>
                                    <li><a href="">Front Panel connectors (system panel connectors)</a></li>
                                    <li><a href="">FWH</a></li>
                                    <li><a href="">South Bridge</a></li>
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
                
                
            </div>
        </div>
    </div>
@endsection