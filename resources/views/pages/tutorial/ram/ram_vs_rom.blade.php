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
                <h3>مقایسه RAM با ROM</h3>
                <p>
                        رم (RAM) حافظه‌ای فرار است یعنی با <b>قطع جریان برق</b> اطلاعات موجود در آن نیز از بین می‌رود. اما ROM برخلاف <a href="">RAM</a> یک حافظه‌ی <b>غیر فرار</b> می‌باشد و اطلاعات با قطع جریان برق و خاموش کردن سیستم از بین نمی‌رود.
                </p>
                <h4>RAM چیست؟</h4>
                <p>
                        <b>Random Access Memory</b> یا به اختصار RAM یک نوع حافظه‌ی فرار درون است که وظیفه‌ی <b>ذخیره‌ی داده‌ها و دستورالعمل‌ها</b> را برای دسترسی سریع پردازنده به آن‌ها، را بر عهده دارد. اگر <a href="">کیس</a> کامپیوتر خود را باز کنید چندین تراشه خواهید دید که در <a href="">اسلات‌های رم</a> قرار گرفته‌اند. سیستم‌های امروزی گاهی تا ۸ اسلات حافظه دارند.
                </p>
                <img class="img-responsive" alt="رم ۲ کاناله کامپیوتر" style="max-width:600px;" src="/images/md/ram/رم-۲-کاناله.jpg">
                <p>
                    <span class="glyphicon glyphicon-zoom-in"></span>تراشه‌های نصب شده در اسلات‌های حافظه در واقع <a href=""><b>DRAM</b></a> نام دارند، اما به اشتباه با نام RAM، شناخته می‌شوند.
                </p>
                <h4>‌ROM چیست؟</h4>
                <p>
                        <b>Read Only Memory</b> یا به اختصار ROM یک حافظه‌ی بیش فرض بروی <a href="">مادربورد</a> و برخی قطعات دیگر است که حاوی <b>اطلاعاتی ثابت</b> (غیر قابل تغییر) در مورد سخت افزار مورد نظر می‌باشد و به <b>بوت سیستم</b> کمک می‌کند. (در واقع بدون ROM سیستم بالا نمی‌آيد)
                </p>
                <img class="img-responsive" alt="تراشه ROM درون کامپیوتر" style="max-width:400px;" src="/images/md/ram/تراشه-rom.jpg">
                <h4>مقایسه RAM و ROM</h4>
                <p>
                        در زیر برخی از ویژگی‌های مهم این دو قطعه مورد مقایسه قرار گرفته‌اند.
                </p>
                <ul class="custom-list">
                    <li><span class="sublist-title">سرعت:</span> سرعت RAM در مقایسه با سرعت ROM بسیار بیشتر است.</li>
                    <p>
                        <span class="glyphicon glyphicon-zoom-in"></span>نوع <a href="">SRAM</a> که در <a href="">حافظه‌های کش </a>(Cache) مورد استفاده قرار میگیرد بسیار سریعتر می‌باشد.
                    </p>
                    <li><span class="sublist-title">حجم حافظه:</span> از آنجایی که حافظه‌ی ROM تنها برخی اطلاعات مهم را در خود ذخیره می‌کند، حجم حافظه در آن <b>بسیار کم</b> می‌باشد. حا اینکه حافظه‌های RAM در حجم‌های زیاد (تا چندین گیگابایت) وجود دارند.</li>
                    <li><span class="sublist-title">قابلیت تغییر:</span> دستیابی به اطلاعات درون ROM و ویرایش آن‌ها بسیار مشکل می‌باشد. زیرا این حافظه از نوع <b>Read Only</b> می‌باشد. حال آنکه پردازنده به راحتی به اطلاعات درون RAM دسترسی دارد.</li>
                    <li><span class="sublist-title">فرار و غیر فرار:</span> حافظه‌ی RAM یک حافظه‌ی فرار می‌باشد و اطلاعات موجود در آن با قطع جریان برق از بین می‌رود. اما اطلاعات موجود در ROM دائمی می‌باشند و با خاموش کردن سیستم از بین نمی‌روند.</li>
                </ul>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection