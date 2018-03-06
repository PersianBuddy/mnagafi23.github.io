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
                <h3>گذرگاه ISA</h3>
                <p>
                        ‌ISA کوتاه شده‌ی <b>Industry Standard Architecture</b>، یک نوع گذرگاه است که برای اولین بار توسط شرکت IBM معرفی شد. نسخه‌های ابتدایی این گذرگاه <a href="">۸ بیتی</a> بودند اما پس از مدت کوتا‌هی نسخه <a href="">۱۶ بیتی</a>  آن نیز عرضه شد.
                </p>
                <p>
                    اسلات ۸ بیتی ISA دارای <b>۶۲ پین</b> و اسلات ۱۶ بیتی دارای <b>۹۸ پین</b> می‌باشد.
                </p>
                <img class="img-responsive" style="max-width:500px;" alt="انواع اسلات‌های ۸ و ۱۶ بیتی" src="/images/md/motherboard/اسلات-توسعه-isa.jpg">
                <p>
                    اسلات‌های ISA قابلیت پشتیبانی از <a href="">کارت شبکه</a>، <a href="">کارت صدا</a> و <a href="">کارت گرافیک</a> (ویدیو) با گذرگاه ISA را دارند. در زیر تصویر یک کارت توسعه از نوع  ISA ۱۶ بیتی را مشاهده می‌کنید.
                </p>
                <img class="img-responsive" style="max-width:380px;" alt="کارت توسعه ISA" src="/images/md/motherboard/کارت-توسعه-isa.jpg">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>اسلات‌ها و کارت‌های ISA در <a href="">مادربورد</a>‌های امروزه <b>پشتیبانی نمی‌شوند</b>.
                </p>
                <h4>آیا می‌توان کارت ۸ بیتی را در اسلات ۱۶ بیتی ISA  قرار داد؟</h4>
                <p>
                        بله، اسلات‌های ۱۶ بیتی ISA بگونه‌ای طراحی شده است تا کارت‌های ۸ بیتی ISA براحتی در آن جای گیرند.
                </p>
                
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection