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
                <h3>اسلات PCI-Express</h3>
                <p>
                        گذرگاه PCI-Express یا PCI-E، در واقع یک اتصال نقطه به نقطه است برای اتصال کارت‌های PCI-Express . در PCI-Express برخلاف دیگر گذرکاه ها که داده‌ها را بصورت موازی انتقال می‌دهند، انتقال داده‌ها را از طریق خطوط ارتباطی سریال به نام lane (مسیر)، انجام می‌پذیرد.
                </p>
                <img class="img-responsive" src="/images/md/motherboard/pci_express_card.png">
                <h4>انواع اسلات PCIe</h4>
                <p>
                        اسلات‌های PCI-E یک یا تعداد بیشتر  lane (مسیر) را دربرمی‌گیرند و هر lane شامل یک خط انتقال دوطرفه است.حال با در نظر گرفتن اینکه سه نسخه برای PCI-E در نظر گرفته شده است و اینکه در نسخه ۱ سرعت هر lane (مسیر) ۲۵۰ مگابایت بر ثانیه و در نسخه ۲ سرعت 500 مگابایت بر ثانیه و نسخه ۳ سرعت انتقال داده‌ها 1 گیگابایت بر ثانیه است به جدول زیر توجه فرمایید! 
                </p>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>نوع PCI-E</th>
                            <th>نسخه PCIe</th>
                            <th>تعداد مسیر (lane)</th>
                            <th>تعداد پین</th>
                            <th>طول اسلات (mm)</th>
                            <th>سرعت انتقال داده‌ها (GB/s)</th>
                        <tr>
                    </thead>
                    <tbody>
                        <tr class="odd-row">
                            <td rowspan="3">X1</td>
                            <td>1</td>
                            <td rowspan="3">1</td>
                            <td rowspan="3">36</td>
                            <td rowspan="3">25</td>
                            <td>0.25</td>
                        </tr>
                        <tr class="odd-row">
                            <td>2</td>
                            <td>0.5</td>
                        </tr>
                        <tr class="odd-row">
                            <td>3</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td rowspan="3">X2</td>
                            <td>1</td>
                            <td rowspan="3">2</td>
                            <td rowspan="3">-</td>
                            <td rowspan="3">-</td>
                            <td>0.5</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2</td>
                        </tr>
                        <tr class="odd-row">
                            <td rowspan="3">X4</td>
                            <td>1</td>
                            <td rowspan="3">4</td>
                            <td rowspan="3">64</td>
                            <td rowspan="3">39</td>
                            <td>1</td>
                        </tr>
                        <tr class="odd-row">
                            <td>2</td>
                            <td>2</td>
                        </tr>
                        <tr class="odd-row">
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td rowspan="3">X8</td>
                            <td>1</td>
                            <td rowspan="3">8</td>
                            <td rowspan="3">98</td>
                            <td rowspan="3">56</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>8</td>
                        </tr>
                        <tr class="odd-row">
                            <td rowspan="3">X16</td>
                            <td>1</td>
                            <td rowspan="3">16</td>
                            <td rowspan="3">164</td>
                            <td rowspan="3">89</td>
                            <td>4</td>
                        </tr>
                        <tr class="odd-row">
                            <td>2</td>
                            <td>8</td>
                        </tr>
                        <tr class="odd-row">
                            <td>3</td>
                            <td>16</td>
                        </tr>
                        
                    </tbody>
                </table>
                <figure>
                    <img class="img-responsive" src="/images/md/motherboard/pci_express_types.jpg">
                    <figcaption>
                        انواع اسلات PCI-Express براساس تعداد مسیر
                    </figcaption>
                </figure>
                <h4>آیا باید تعداد مسیر کارت و اسلات یکی باشد؟</h4>
                <p>
                        PCI-E دارای ویژگی backward compatibility است؛ یعنی اسلات‌ها با تعداد مسیر (lane) بیشتر کارت‌ها با مسیر‌های کمتر را نیز پشتیبانی می‌کنند.
                </p>
                <h4>آیا می‌توان از کارت با PCIe نسخه بالا در اسلات با نسخه پایین PCI-E استفاده کرد؟</h4>
                <p>
                        نسخه‌های PCI-E با هم سازگارند؛ ولی اگر نسخه‌کارت و اسلات با هم متفاوت باشند، گذرگاه با سرعت نسخه پایین‌تر کار خواهد کرد.
                </p>
                 
                
            </div>
        </div>
    </div>
@endsection