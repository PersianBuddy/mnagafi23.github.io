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
                <h3>RAID جیست؟</h3>
                <p>
                    RAID، کوتاه‌ شده <b>Redundent Array of Independent Disks</b> نوعی فناوری است که در آن، داده‌ها به طور همزمان بین چندین <a href="">هارد</a> درایو توزیع می‌شود. و <b>سرعت</b> و <b>تحمل خرابی</b> را بالا می‌برد. همچنین RAID قابلیت <a href="">Hot Swapping</a> را پشتیبانی می‌کند یعنی در صورت خراب شدن یک هارد بدون نیاز به ریبوت سیستم می‌توان آن را تعویض کرد.
                </p>
                <h4>کنترلر RAID</h4>
                <p>
                    برای پیاده‌سازی RAID در کامپیوتر به کنترلر RAID نیاز است. این کنترلر می‌تواند از نوع سخت‌افزاری یا نرم‌افزاری باشد. نوع نرم‌افزاری کنترلر RAID نیاز به سیستم عامل XP و بالاتر دارد و کارایی آن پایین است و بار پردازشی زیادی به <a href="">پردازنده</a> تحمیل می‌کند.  
                </p>
                <p>
                    در کنترلر سخت‌افزاری حال آنکه یک کارت جدا باشد یا بروی <a href="">مادربورد</a> (شماره ۲۱ و کانکتو‌های بالای شماره ۲۴ در تصویر زیر) قرار گرفته باشد. باید توجه داشت که هر کنترلر تنها نوع خاصی را پشتیبانی می‌کند. برای مثال کنترل IDE/ATA RAID تنها از هارد‌های <a href="">IDE</a> پشتیبانی می‌کنند.
                </p>
                <a href="/images/xl/motherboard/اجزای-مادربورد.jpg">
                    <img alt="اجزای یک مادربورد" title="برای مشاهده تصویر بزرگ کلیک کنید" class="img-responsive" src="/images/md/motherboard/اجزای-مادربورد.jpg">
                </a>
                <h4>پیکربندی RAID</h4>
                <p>
                    کنترلر RAID، داده‌ها را به دو روش نواری <b>Striping</b> یا آینه‌ایی <b>mirroring</b> یا ترکیبی از آن دو درون آرایه‌ای از هارد‌ها توزیع می‌کند. در روش Striping، بلوک داده‌ها به تعداد هارد درایو‌های موجود تقسیم شده و به طور همزمان و موازی بین آن‌ها تقسیم می‌شود. این روش سرعت خواندن و نوشتن را افزایش می‌دهد. در روش mirroring، کپی یکسانی از بلوک‌ داده‌ها در آرایه هارد‌‌ها ذخیره می‌شود. در این روش بدلیل در دسترس بودن کپی داده‌ها حتی با وجود خرابی یک هارد، اطلاعات از بین نمی‌رود.
                </p>
                <h4>سطح‌های استاندارد RAID</h4>
                <p>
                    <b>RAID 0 :</b> در این روش آرایه‌ها (مجموعه‌ای از چند هارد پیکربندی شده با RAID) به صورت <b>striping</b> عمل می‌کنند. در این روش که حداقل به <b>۲ هارد</b> نیاز است و داده‌ها به قسمت‌های مساوی بین هارد ها <b>تقسیم</b> می‌شود.
                </p>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">مزیت: بدلیل تقسیم انتقال داده‌ها بین هارد ها <a href="">سرعت بالا</a> است و انتلاف حجم نیز وجود ندارد.</li>
                    <li class="list-group-item list-group-item-danger">عیب: چون داده‌ها در همه هارد‌ها تقسیم می‌شوند با خراب شدن <b>یک</b> هارد تمام داده از بین می‌روند.</li>
                </ul>
                <div class="row">
                    <div class="col-sm-6">
                        <img class="img-responsive" style="max-width:300px;" alt="انمیشن نمایش عملکرد RAID 0" src="/images/md/motherboard/عملکرد-raid0.gif">
                    </div>
                    <div class="col-sm-6">
                        <img class="img-responsive" alt="عملکرد RAID" src="/images/md/motherboard/عملکرد-raid0.jpg">
                    </div>
                </div>
                <p>
                    <b>RAID 1 :</b> در این روش نیز حداقل ۲ هارد نیاز است اما در RAID 1  آرایه‌ها به صورت <b>mirroring</b> عمل می‌کنند و داده‌ها در دو درایو نوشته می‌شوند.
                </p>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">مزیت: چون کپی داده‌های یک هارد در دیگری قرار می‌گیرد با خراب شده یکی  داده‌ها هنوز وجود دارند. </li>
                    <li class="list-group-item list-group-item-danger">عیب: کاهش جزئی سرعت و استفاده از <b>نصف ظرفیت</b> (در نصف دیگر کپی داده‌ها قرار میگیرد)</li>
                </ul>
                <div class="row">
                    <div class="col-sm-6">
                        <img class="img-responsive" style="max-width:300px;" alt="انمیشن نمایش عملکرد RAID 1" src="/images/md/motherboard/عملکرد-raid1.gif">
                    </div>
                    <div class="col-sm-6">
                        <img class="img-responsive" alt="عملکرد RAID 1" src="/images/md/motherboard/عملکرد-raid1.jpg">
                    </div>
                </div>
                <p>
                    <b>RAID 5 :‌</b> برای پیاده سازی RAID 5 حداقل به <b>۳ هارد</b> نیاز است. برای توضیح نحوه عملکرد این روش فرض کنید ۴ هارد دارید داده‌ها برای نوشتن به سه جزء تقسم شده و داخل سه هارد قرار می‌گیرند و درون هارد چهارم <b>ترکیب</b> این اجزا (که Parity Strip نام دارد) قرار می‌گیرد، پس اگر یک هارد خراب شود داده‌ها براحتی قابل بازیابی از سرهم سه جزء یا یافتن Parity strip است.
                </p>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">مزیت: افزایش سرعت خواندن و نوشتن، بازیابی اطلاعات در صورت خرابی یک هارد</li>
                    <li class="list-group-item list-group-item-danger">عیب: ظرفیت یک هارد بلا‌استفاده است</li>
                </ul>
                    <img class="img-responsive" style="max-width:300px;" style="width:250px;" alt="انمیشن نمایش عملکرد RAID 5" src="/images/md/motherboard/عملکرد-raid5.gif">
                    <img class="img-responsive" alt="عملکرد RAID 5" src="/images/md/motherboard/عملکرد-raid5.jpg">
                <p>
                    <b>RAID 6 :</b> این روش همانند RAID 5 است با این تفاوت که حداقل به <b>۴ هارد</b> نیاز است. و کپی داده‌ی تکه تکه شده درون دو هارد قرار می‌گیرد. پس اگر دو هارد خراب شوند باز هم داده‌ها قابل دسترسی هستند.
                </p>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">مزیت: افزایش سرعت خواندن و نوشتن، بازیابی اطلاعات در صورت خرابی دو هارد</li>
                    <li class="list-group-item list-group-item-danger">عیب: ظرفیت دو هارد بلا‌استفاده است.</li>
                </ul>
                <img class="img-responsive" alt="عملکرد RAID 6" src="/images/md/motherboard/عملکرد-raid6.jpg">
                <p>
                    <b>RAID 10 :</b> ترکیب روش RAID 0 و RAID 1 است. حداقل <b>چهار هارد</b> درایو نیاز است.
                </p>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">مزیت: سرعت نوشتن بالاتر از RAID 5، از بین نرفتن اطلاعات در صورت سوختن یک هارد از هارد‌هایی که به صورت RAID 1 به هم متصل شده‌اند.</li>
                    <li class="list-group-item list-group-item-danger">عیب: نصف ظرفیت کلی در دسترس است (نصف دیگر شامل کپی داده‌ها می‌شود)</li>
                </ul>
                <img class="img-responsive" alt="عملکرد RAID 10" src="/images/md/motherboard/عملکرد-raid10.jpg">
                
                
                
                {{--  related links  --}}
                <div id="related-links">

                </di>
                 
                
            </div>
        </div>
    </div>
@endsection