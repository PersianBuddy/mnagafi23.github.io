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
                <h3>Northbridge چیست؟</h3>
                <p>
                        برج شمالی یا Northbridge که با عنوان PCI/AGP Controller به اختصار PAC نیز معرفی می‌شود، یک IC بروی <a href="">مادربورد</a> است که وظیفه‌ی ایجاد ارتباط بین <a href="">پردازنده</a>،گذرگاه <a href="">AGP</a> و رم را برعهده دارد. برخلاف <a href="">Southbridge</a>، برج شمالی بطور مستقیم به این اجزا متصل می‌باشد.
                </p>
                <p>
                        امروزه Northbridge به عنوان یک چیپ واحد عرضه می‌شود حال آنکه در گذشته گاهی شامل سه چیپ می‌شد.
                </p>
                <p>
                        همانطور که در تصویر زیر مشاهده می‌کنید Northbridge به <a href="">رم</a> و پردازنده نزدیکتر است و معمولا بزرگتر از Southbridge ساخته می‌شود. معمولاً هردوی این چیپ‌ها دارای یک <a href="">heat sink</a> برای دفع گرما هستند.
                </p>
                <a href="/images/xl/motherboard/اجزای-مادربورد.jpg">
                    <img alt="اجزای یک مادربورد" title="برای مشاهده تصویر بزرگ کلیک کنید" class="img-responsive" src="/images/md/motherboard/اجزای-مادربورد.jpg">
                </a>
                <p>
                        <span class="glyphicon glyphicon-hand-left"></span> برخی مادربورد‌های جدید Northbridge و Southbridge را با <a href="">IHA</a> جایگزین کرده‌اند.
                </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection