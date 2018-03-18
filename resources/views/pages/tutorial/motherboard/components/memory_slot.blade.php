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
                <h3>اسلات رم Memory Slot</h3>
                <p>
                        اسلات <a href="">رم</a> یا Memory Slot یک اسلات بروی مادربورد برای اتصال رم به کامپیوتر است. ممکن است دو یا چهار اسلات رم بروی <a href="">مادربورد</a> بسته به نوع آن وجود داشته باشد و از تکنولوژی <a href="">Dual Channel</a> استفاده کنند.
                </p>
                <img class="img-responsive" alt="چهار اسلات رم ddr3" src="/images/md/motherboard/اسلات-رم-ddr3.jpg">
                <h4>انواع اسلات‌های رم</h4>
                <p>
                        رم‌ها با فناوری‌های مختلفی تولید می‌شوند که انواع متداول آن به همراه برخی ویژگی‌های آن‌‌ها در زیر معرفی شده است. 
                </p>
                <ul class="custom-list">
                    <li><span class="sublist-title">SDRAM :</span> اسلات‌های رم SDRAM دارای ۱۶۸ پین بوده و با ولتاژ ۳.۳ ولت کار می‌کنند، این اسلات حافظه از قدیمی‌ترین اسلات‌های رم می‌باشد و در هر سیکل ساعت قادر است ۱ داده یا دستورالعمل را منتقل کند.</li>
                    <li><span class="sublist-title">DDR SDRAM :</span> این نوع اسلات دارای ۱۸۴ پین هستند و با ولتاژ 2.5 ولت کار می‌کنند.</li>
                    <li><span class="sublist-title">DDR2 SDRAM :</span> اسلاتی ۲۴۰ پین می‌باشد و ولتاژ کاری آن ۱.8 ولت می‌باشد.</li>
                    <li><span class="sublist-title">DDR3 SDRAM :</span> این نوع اسلات نیز مانند DDR2 دارای ۲۴۰ پین می‌باشد ولی با ولتاژ 1.5 ولت کار می‌کنند.</li>
                    <li><span class="sublist-title">DDR3L :</span> اسلاتی ۲۴۰ پین با ولتاژ ۱.۳۵ می‌باشد.</li>
                    <li><span class="sublist-title">DDR4 :</span> این اسلات با ولتاژ ۱.۲ ولت کار می‌کند و دارای ۲۸۸ پین می‌باشد.</li>
                    <li><span class="sublist-title">DDR4L :</span> همانند اسلات DDR4 دارای ۲۸۸ پین می‌باشد و با ولتاژ ۱.۵ ولت کار می‌کند.</li>
                </ul>
                <p>
                        <sapn class="glyphicon glyphicon-alert"></sapn><a href="">انواع متفاوت رم</a> ولتاژ‌های کاری متقاوت دارند و درصورتی که یک ماژول رم  در سوکت مربوط به رم دیگری قرار داده شود، ماربورد یا رم می‌سوزد. برای پیشگیری از این اتفاق تمامی اسلات‌های رم دارای یک یا دو دندانه (notch) هستند تا هر رم تنها قابل نصب بروی اسلات نوع خودش باشد. 
                </p>
                <img class="img-responsive" alt="محل قرارگیری دندانه در رم‌های مختلف" src="/images/md/motherboard/محل-دندانه-روی-رم.jpg">
                {{--  related links  --}}
                <div id="related-links">
                    <a href="">فناوری چند کاناله رم</a>
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection