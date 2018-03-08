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
                            بروی <a href="">مادربورد</a> کانکتورهای باریکی وجود دارند که به کامپیوتر، این امکان را می‌دهند تا قطعات سخت‌افزاری به شکل کارت را به سیستم اضافه شود؛ به کارت متصل شده expansion card  (کارت توسعه) و به این شیارها <b>شیارهای توسعه</b> (expansion slots) گفته می‌شود.
                     </p>
                    

                 </div>
                 <div id="expansion-slot-type">
                    <h4>انواع اسلات توسعه</h4>
                     <p>
                        در زیر انواع <b>گذرگاه هایی</b> که قطعات از طریق اسلات های توسعه با آن‌ها ارتباط برقرار می‌کنند مورد بررسی قرار داده شده است.
                        همچنین کارت‌های توسعه قابل نصب بروی آن ها نیز معرفی شده برای مشاهده اطلاعات بیشتر در مورد هر یک بروی لینک مربوطه کلیک کنید.
                     </p>
                     <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>نوع اسلات</th>
                                <th>کارت های توسعه قابل نصب</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{url('tutorial/motherboard/components/اسلات-ISA')}}">ISA</a></td>
                                <td><a href="{{url('tutorial/internet/کارت-شبکه')}}">کارت شبکه</a> - <a href="{{url('tutorial/sound/کارت-صدا')}}">کارت صدا</a> - <a href="{{url('tutorial/graphic/کارت-گرافیک')}}">کارت گرافیک</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{url('tutorial/motherboard/components/اسلات-pci')}}">PCI</a></td>
                                <td><a href="{{url('tutorial/other/اینترفیس-SCSI')}}">SCSI</a> - کارت شبکه - کارت صدا - کارت گرافیک</td>
                            </tr>
                            
                            <tr>
                                <td><a href="{{url('tutorial/motherboard/components/اسلات-agp')}}">AGP</a></td>
                                <td>کارت گرافیک</td>
                            </tr>
                            <tr>
                                <td><a href="{{url('tutorial/motherboard/components/اسلات-pci-express')}}">PCI-Express</a></td>
                                <td>کارت گرافیک - <a href="{{url('tutorial/internet/کارت-مودم')}}">کارت مودم</a> - کارت صدا - کارت شبکه</td>
                            </tr>
                            <tr>
                                <td><a href="{{url('tutorial/motherboard/components/اسلات-AMR')}}">AMR</a></td>
                                <td>مودم - کارت صدا</td>
                            </tr>
                            <tr>
                                <td><a href="{{url('tutorial/motherboard/components/اسلات-CNR')}}">CNR</a></td>
                                <td>مودم - کارت شبکه - کارت صدا</td>
                            </tr>
                        </tbody>
                     </table>
                     <p>
                        در مادربورد زیر می‌توانید برخی از  شیارها (اسلات های) توسعه را در قسمت بالا سمت چپ ببینید! 
                     </p>
                     <a href="/images/xl/motherboard/اجزای-مادربورد.jpg"><img class="img-responsive" alt="اجزای مادربورد" src="/images/md/motherboard/اجزای-مادربورد.jpg"></a>
                 </div>
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection