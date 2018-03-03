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
                <h3>کانکتور‌های پنل جلوی کیس</h3>
                <p>
                        این کانکتور‌ها که با نام‌های System panel connector و Front Panel Connector نیز شناخته می‌شوند؛‌ وظیفه کنترل <b>دکمه پاور</b>، <b>دکمه ریستارت</b> (Restart) و ال‌ای‌دی‌های (<b>LED</b>) پنل جلوی <a href="">کیس</a> را بر عهده دارند.
                </p>
                <img class="img-responsive" style="max-width:500px;" alt="کانکتور کابل‌های پنل جلوی کیس" src="/images/md/motherboard/کانکتور-پنل-جلو-کیس.jpg">
                <p>
                        همانطور که در تصویر مشاهده می‌کنید کابل‌های مربوط به این کانکتور‌ها دارای دو سیم می‌باشد (Speaker چهار سیم دارد) که کابل رنگی کابل برق (در LED ها <b>مثبت</b>) و کابل سیاه و سفید (در LED ها <b>منفی</b>) کابل اتصال به زمین (<b>Ground</b>) نام دارند. نوع کانکتور و محل نصب کابل در مادربورد‌های مختلف ممکن است متفاوت باشد (به دفترچه راهنمای <a href="">مادربورد</a> مراجعه شود).
                </p>
                <img class="img-responsive" style="max-width:350px;" alt="کابل‌ها متصل کننده پنل جلوی کیس به مادربورد" src="/images/md/motherboard/کابل-پنل-جلو-کیس.jpg">
                <h4>انواع کابل‌های پنل جلو کیس</h4>
                <ul class="list-group">
                    <li class="list-group-item">کابل ال‌ای‌دی پاور (Power LED) یا PLED که در هنگام روشن بودن سیستم روشن می‌شود.</li>
                    <li class="list-group-item">کابل ال‌ای‌دی هارد (HDD LED) یا IDE LED که هنگام <b>نوشتن و خواندن</b> اطلاعات روی <a href="">هارد</a> چشمک می‌زند</li>
                    <li class="list-group-item">کابل Power SW یا PWRSW که وظیفه کنترل دکمه پاور سیستم را بر‌عهده دارد</li>
                    <li class="list-group-item">کابل Reset SW دکمه ریستارت سیستم را کنترل می‌کند</li>
                    <li class="list-group-item">کابل Speaker برای ایجاد <b>صدای بیپ</b> (beep) هنگام بوت سیستم بکار می‌رود.</li>
                </ul>
                
                <p>
                    <span class="glyphicon glyphicon-hand-left"></span>در بیشتر مادربورد‌ها پنل جلویی روی مادربورد قرار داده شده است، اما برخی شرکت‌ها مانند <a href="">ASUS</a> یک قطعه به نام <b>Q-Connector</b> ارائه می‌کنند، تا کاربر ابتدا کابل‌ها را به Q-Connector متصل کند، سپس Q-Connector را به مادربورد متصل کند.
                </p>
                <img class="img-responsive" style="max-width:450px;" alt="اتصال Q-connector به مادربورد" src="/images/md/motherboard/اتصال-q-connector.jpg">
                <h4>محل اتصال کابل‌های پنل جلوی کیس</h4>
                <p>بسته به نوع مادربورد محل اتصال کابل‌های پنل جلوی کیس متفاوت است و برای هر مادربورد باید به <b>دفترچه راهنمای</b> آن مراجعه شود. بعنوان یک راهنمای کلی به نکات زیر توجه کنید:</p>
                <ul class="custom-list">
                    <li>سیم رنگی کابل‌‌های دو سیم، سر <b>مثبت</b> آن و قسمت مشکی یا سفید سر اتصال به زمین یا <b>Ground</b> و در LED‌ها سر <b>منفی</b> می‌باشد.</li>
                    <li>کانکتور‌های پنل جلوی ویژگی <a href="">Keyed</a> ندارند یعنی می‌توان از هر دو طرف کابل را به آن‌ها متصل کرد و پین هم آسیب نبیند. همچنین کابل‌های پنل جلو را می‌توان از هر جهت متصل کرد، البته در مورد LED ها در صورت اتصال اشتباه LED مورد نظر کار نمی‌کند.</li>
                </ul>
                {{--  related links  --}}
                <div id="related-links">

                </div>
                 
                
            </div>
        </div>
    </div>
@endsection