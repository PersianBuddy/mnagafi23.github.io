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
                 <div id="expansion-slots-overview">
                    <h3>شیارها‌ی (اسلات) توسعه</h3>
                    <p>
                            بروی مادربورد کانکتورهای باریکی وجود دارند که به کامپیوتر، این امکان را می‌دهند تا قطعات سخت‌افزاری به صورت کارت به سیستم اضافه شود؛ به کارت متصل شده expansion card  (کارت توسعه) و به این شیارها شیارهای توسعه (expansion slots) گفته می‌شود.
                     </p>
                    

                 </div>
                 <div id="expansion-slot-type">
                    <h4>انواع اسلات توسعه</h4>
                     <p>
                        در زیر انواع گذرگاه هایی که قطعات از طریق اسلات های توسعه با آن‌ها ارتباط برقرار می‌کنند مورد بررسی قرار داده شده است.
                        همچنین کارت‌های توسعه قابل نصب بروی آن ها نیز آورده شده برای مشاهده اطلاعات بیشتر در مورد هر یک بروی لینک کلیک مربوطه کلیک کنید.
                     </p>
                     <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>نوع اسلات</th>
                                <th>کارت های توسعه قابل نصب</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">ISA</a></td>
                                <td><a href="">کارت شبکه</a> - <a href="">کارت صدا</a> - <a href="">کارت گرافیک</a></td>
                            </tr>
                            <tr>
                                <td><a href="">PCI</a></td>
                                <td><a href="">SCSI</a> - کارت شبکه - کارت صدا - کارت گرافیک</td>
                            </tr>
                            
                            <tr>
                                <td><a href="">AGP</a></td>
                                <td>کارت گرافیک</td>
                            </tr>
                            <tr>
                                <td><a href="">PCI-Express</a></td>
                                <td>کارت گرافیک - <a href="">مودم</a> - کارت صدا - کارت شبکه</td>
                            </tr>
                            <tr>
                                <td><a href="">AMR</a></td>
                                <td>مودم - کارت صدا</td>
                            </tr>
                            <tr>
                                <td><a href="">CNR</a></td>
                                <td>مودم - کارت شبکه - کارت صدا</td>
                            </tr>
                            <tr>
                                <td><a href="">VESA</a></td>
                                <td>کارت گرافیک</td>
                            </tr>
                        </tbody>
                     </table>
                     <p>
                        در مادربورد زیر می‌توانید برخی از  شیارها (اسلات های) توسعه را در قسمت بالا سمت چپ ببینید! 
                     </p>
                     <a href="/images/xl/motherboard/اجزای-مادربورد.jpg"><img class="img-responsive" alt="اجزای مادربورد" src="/images/md/motherboard/اجزای-مادربورد.jpg"></a>
                 </div>
                
            </div>
        </div>
    </div>
@endsection