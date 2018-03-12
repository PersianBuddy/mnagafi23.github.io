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
                <h3>Turbo Boost در پردازنده‌های اینتل</h3>
                <p>
                        در برخی <a href="">پردازنده</a>‌های اینتل علاوه بر <b>فرکانس مرجع</b> یک فرکانس دیگری به نام <b>فرکانس Boost</b> وجود دارد که حداکثر فرکانس یک هسته پردازنده (در پردازنده‌های چند هسته‌ایی) در حالت Turbo Boost می‌باشد.
                </p>
                <img class="img-responsive" alt="Turbo Boost در پردازنده‌های اینتل" style="max-width:500px;" src="/images/md/cpu/turbo-boost-اینتل.jpg">
                <p>
                    همانطور که می‌دانید برخی از برنامه‌ها این قابلیت را دارند که به چند قسمت مساوی تقسم شده و هر قسمت به صورت موازی توسط پردازنده مورد پردازش قرار گیرند به این گونه برنامه‌ها برنامه‌های <b>چند رشته‌ای</b> یا (multi-thread) گفته می‌شود. اما برخی برنامه‌ها این قابلیت را نداشته و در هر لحظه تنها <b>یک دستورالعمل</b> (instruction) را به پردازنده ارسال می‌کنند به این برنامه‌ها برنامه‌های تک رشته‌ای (single thread) گفته می‌شود. در پردازش این نوع برنامه‌ها، پردازنده به دو روش عمل می‌کند.
                </p>
                <ul class="custom-list">
                    <li>در روش اول با این برنامه‌ها نیز به صورت چند رشته‌ای برخورد می‌کند و تمام هسته‌‌های پردارنده به یک اندازه درگیر می‌شوند و یک میزان برق مصرف می‌کنند.</li>
                    <li>اما در روشی دیگر پردازنده از <b>برق (توان) مصرفی</b> هسته‌هایی که مورد نیاز نیستند <b>کاسته</b> و به هسته یا هسته‌هایی که در درحال پردازش دستورالعمل‌های مربوط به برنامه هستند، می‌دهد و عملکرد این هسته افزایش می‌یابد (البته بازده هسته‌های دیگر کاهش می‌یابد). به این روش Intel Turbo Boost گفته می‌شود.</li>
                </ul>
                <img class="img-responsive" alt="Turbo Boost در پردازنده‌های چند هسته‌ای" style="max-width:500px;" src="/images/md/cpu/turbo-boost-پردازنده.jpg">
                <p>
                        حداکثر فرکانس در حالت Turbo Boost را فرکانس Boost پردازنده می‌نامند.
                </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection