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
                <h3>پردازنده (CPU)</h3>
                <p>
                        CPU مخفف عبارت Central Processing Unit (واحد پردازش مرکزی) و بعنوان <b>مغز کامپیوتر</b> شناخته می‌شود. اجزای مختلفی در کامپیوتر وجود دارند که کار پردازش داده‌ها را انجام می‌دهند (نظیر <a href="">GPU</a>)، اما وظیفه‌ی <b>اجرای برنامه‌ها</b> بر عهده‌ی CPU می‌باشد. 
                </p>
                <img class="img-responsive" alt="پردازنده" style="max-width:600px;" src="/images/md/cpu/پردازنده-اینتل.jpg">
                <h4>ساختار پردازنده</h4>
                <p>
                        وظیفه پردازنده‌ها، اجرای دنباله‌ای از <b>دستورالعمل‌های</b> (instruction) ذخیره شده است. این دستورالعمل‌ها برای پردازش بایددر حافظه‌های <a href="">RAM یا ROM</a> نگه‌داری شوند. چرخه‌ی پردازش دستورالعمل‌ها به وسیله‌ی اجزای زیر انجام می‌شود.
                </p>
                <img class="img-responsive" alt="اجزای پردازنده" style="max-width:700px;" src="/images/md/cpu/اجزای-پردازنده.jpg">
                <ul class="custom-list">
                    <li>CU : <b>Control Unit</b> یا واحد کنترل، وظیفه‌ی <b>مدیریت چرخه‌ی</b> پردازش دستورالعمل‌ها را بر عهده دارد. </li>
                    <li>ALU : <b>Arithmetic Logic Unit</b> محل انجام پردازش مورد نیاز دستورالعمل‌ها می‌باشد. عملیات‌های حسابی (جمع، تفریق، ضرب، تقسیم، شیفت) و عملیات‌های منطقی (AND, OR, XOR, NOT) همگی در این قسمت انجام می‌شود.</li>
                    <p>
                        <span class="glyphicon glyphicon-info-sign"></span>تمام عملیات‌های ALU بروی <b>اعداد صحیح</b> انجام می‌شود
                    </p>
                    <li><b>FPU</b> : بخش Floating-point Unit برای محاسبات روی <b>اعداد اعشاری</b> و محاسبات سطح بالای ریاضی بکار می‌رود.</li>
                    <li><b>Register</b> : Register‌ها یا ثبات‌ها، <b>حافظه‌های سریع و کوچکی</b> هستند که برای ذخیره‌ی موقت و سریع داده‌ها، دستورالعمل‌ها و نتایج دستورالعمل‌ها استفاده می‌شوند.</li>
                    <li><b>BIU</b> : قسمت Bus Interface Unit بخشی است که مسئول ارتباط CPU با تمام قمسمت‌های بیرون CPU می‌باشد.</li>
                </ul>
                <h4>چگونگی کارکرد CPU</h4>
                <p>
                        CPU از چهار مرحله برای اجرای دستورالعمل‌ها استفاده می‌کند که شامل fetch، decode، execute و store است.
                </p>
                <ul class="custom-list">
                    <li><b>Fetch</b> : در این مرحله دستورالعمل از حافظه <b>بازیابی</b> می‌شود. ابتدا آدرس دستورالعمل توسط PC (Program Counter) مشخص میشود، سپس دستورالعمل درون IR (Instruction Register) یا ریجستر دستورالعمل ذخیره می‌شود. در انتهای عملیات fetch، PC به آدرس بعدی اشاره می‌کند و این عملیات‌ ادامه می‌یابد.</li>
                    <li><b>Decode</b> : دستورالعمل‌های بازیابی شده در مرحله‌ی Fetch برای کاربرد مستقیم در CPU، پیچیده می‌باشند. بنابراین در این مرحله این دستورالعمل‌ها <b>تفسیر</b> می‌شوند و به واحد‌های فابل فهم برای CPU ترجمه می‌شوند.</li>
                    <li><b>Execute</b> : در این مرحله (مرحله‌ی اجرا)، بخش CU اطلاعات رمزگشایی شده را به واحد‌های مربوط به آن عملیات همچون ALU و FPU انتقال می‌دهد و دستورالعمل‌ها اجرا می‌شوند.</li>
                    <li><b>Store</b> : نتیجه‌ی تولید شده توسط دستورالعمل‌ها در حافظه‌ی اصلی (و یا ریجستر برای انجام عملیات بعدی) <b>ذخیره می‌شود</b>.</li>
                </ul>
                {{--  related links  --}}
                <div id="related-links">
                    <a href="{{url('tutorial/cpu/پردازنده-۳۲بیت-۶۴بیت')}}">مقایسه پردازنده‌های ۳۲ و ۶۴ بیتی</a>
                    <a href="{{url('tutorial/cpu/حافظه-Cache-پردازنده')}}">حافظه Cache پردازنده</a>
                    <a href="{{url('tutorial/cpu/پردازنده-چند-رشته')}}">پردازنده چند رشته‌ای</a>
                    <a href="{{url('tutorial/cpu/پردازنده-چند-هسته‌ای')}}">هسته (Core) در پردازنده‌‌ها به چه معناست؟</a>
                    <a href="{{url('tutorial/cpu/فرکانس-پردازنده')}}">فرکانس (Clock Speed) پردازنده</a>
                    <a href="{{url('tutorial/cpu/فرکانس-boost-پردازنده')}}">Trubo Boost پردازنده‌های اینتل</a>
                    <a href="{{url('tutorial/cpu/مقایسه-پردازنده-های-core-i-اینتل')}}">مقایسه پردازنده‌های Core i شرکت اینتل</a>
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection