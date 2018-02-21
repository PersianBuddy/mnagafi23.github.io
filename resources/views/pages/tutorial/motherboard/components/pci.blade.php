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
                <h3>اسلات PCI</h3>
                <p>
                        گذرگاه Preipheral Component Interconnect یا به اختصار PCI رایج ترین گذرگاه‌ها در کامپیوتر‌های دهه ۹۰ میلادی بوده است.
                        PCI در سال ۱۹۹۲ توسط کمپانی <a href="">اینتل </a>(Intel) در دو نوع  <a href="">۳۲ بیت</a> (32-bit) و <a href="">۶۴ بیت</a> (64-bit) به بازار عرضه شد.در حال حاظر این گذرگاه جای خود را به <a href="">PCI-Express</a> داده است.
                </p>
                <img class="img-responsive" alt="اسلات pci" src="/images/md/motherboard/اسلات-pci.jpg">
               <h4>انواع اسلات PCI</h4>
               <p>
                    گذرگاه PCI در چهار نوع عرضه می‌شود که در جدول زیر نام و مشخصات آن‌ها نمایش داده شده است:
               </p>
               <p>
                    <span class="glyphicon glyphicon-hand-left"></span>سرعت ساعت گذرگاه از نوع اسلات آن مشخص نیست و باید به دفترچه راهنمای مادربورد رجوع کنید...
                </p>
                <table class="table table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>نوع گذرگاه PCI</th>
                            <th><a href="">پهنای گذرگاه </a>(bit)</th>
                            <th><a href="">سرعت ساعت</a> (MHz)</th>
                            <th>سرعت انتقال داده‌ها (MB/s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PCI-32-bit/33 MHz</td>
                            <td>32</td>
                            <td>33</td>
                            <td>133</td>
                        </tr>
                        <tr>
                            <td>PCI-32-bit/66 MHz</td>
                            <td>32</td>
                            <td>66</td>
                            <td>266</td>
                        </tr>
                        <tr>
                            <td>PCI-64-bit/33 MHz</td>
                            <td>64</td>
                            <td>33</td>
                            <td>266</td>
                        </tr>
                        <tr>
                            <td>PCI-64-bit/66 MHz</td>
                            <td>64</td>
                            <td>66</td>
                            <td>533</td>
                        </tr>
                    </tbody>
                </table>
                <p>
                        <span class="glyphicon glyphicon-hand-left"></span>گذرگاه‌های ۳۲ بیتی از اسلات‌های ۱۲۴ پینی و گذرگاه‌های ۶۴ بیتی از اسلات‌های ۱۸۸ پینی استفاده می‌کنند.تصویر در ادامه مطلب ...
                </p>
                <h4>تفاوت ولتاژ در اسلات‌های PCI </h4>
                <p>
                        برخی اسلات‌های PCI ولتاژ ۵ ولت و برخی ولتاژ ۳.۳ ولت را ارائه می‌دهند. برخی ار آن‌ها نیز هر دو ولتاژ را ارائه می‌دهند که Universal PCI bus نامیده می‌شوند.
                        در اسلات‌های PCI بریدگی‌هایی به نام notch وجوددارد که مشخص می‌کند که اسلات با چه ولتاژی کار می‌کند. در زیر تصویر این اسلات‌ها و محل قرارگیری notch مشخص شده است:
                </p>
                <img class="img-responsive" alt="انواع اسلات pci براساس محل قرارگیری notch" src="/images/md/motherboard/انواع-اسلات-pci.jpg">
               
                
                {{--  related links  --}}
                <div id="related-links">

                </di>
                 
                
            </div>
        </div>
    </div>
@endsection