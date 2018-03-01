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
                <h3>Southbridge چیست؟</h3>
                <p>
                        Southbridge یا برج جنوبی یک IC است که کنترل قطعاتی همچون <a href="">هارد</a>، <a href="">USB</a>، <a href="">PCI</a>، <a href="">BIOS</a>، گرافیک و صدای آن بورد و برخی قطعات با سرعت متوسط روی <a href="">مادربورد</a> را برعهده دارد.
                </p>
                <p>
                        نام Southbridge از محل این چیپ گرفته شده که در قسمت جنوبی (پایین) مادربورد واقع شده است. در تصویر زیر اجزای یک مادربورد نمایش داده شده، همانطور که مشاهده می‌کنید <a href="">Northbridge</a> به <a href="">پردازنده</a> نزدیکتر است و هر دوی این چیپ‌ها دارای یک <a href="">heat sink</a> برای انتقال گرما به بیرون هستند.
                </p>
                <a href="/images/xl/motherboard/اجزای-مادربورد.jpg">
                    <img alt="اجزای یک مادربورد" title="برای مشاهده تصویر بزرگ کلیک کنید" class="img-responsive" src="/images/md/motherboard/اجزای-مادربورد.jpg">
                </a>
                <p>
                    اگرچه بیشتر پورت‌های ورودی و خروجی توسط Southbridge کنترل می‌شوند اما پورت‌ها با اهمیت کمتر مانند پورت سریال، <a href="">کیبورد</a>، <a href="">ماوس</a> (<a href="">پورت سریال</a>) توسط چیپی به نام <a href="">Super I/O</a> یا SIO کنترل می‌شوند.
                    در مادربورد‌های جدید این دو چیپ را با هم ترکیب می‌کنند که به آن Super Southbridge گفته میشود. همچنین برخی شرکت‌ها مانند <a href="">NVIDIA</a> این دو چیپ و Northbridge را با هم ترکیب و به عنوان یک چیپ عرضه می‌کنند.
                </p>
                <p>
                    <span class="glyphicon glyphicon-hand-left"></span>مادربورد‌های جدید Northbridge و Southbridge را با <a href="">IHA</a> جایگزین کرده‌اند.
                </p>
                {{--  related links  --}}
                <div id="related-links">

                </di>
                 
                
            </div>
        </div>
    </div>
@endsection