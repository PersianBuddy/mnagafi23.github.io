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
                <h3>کانکتور MOLEX پاور</h3>
                <p>
                    کانکتور Molex پاور دارای ۴ پین می‌باشد و یکی از پر کاربرد‌ترین کانکتور‌‌های پاور است که <b>بیشتر قطعات</b> داخلی کامپیوتر نظیر  <a href="">فن</a>، <a href="">درایو‌های نوری</a> (DVD Writer, CD Writer)، هارد و حتی برخی <a href="">کارت‌های گرافیک</a> از آن استفاده می‌کنند.
                </p>
                <img class="img-responsive" alt="کانکتور MOLEX پاور" style="max-width:300px;" src="/images/md/power_supply/کانکتور-molex-پاور.jpg">
                <p>
                        کانکتور Molex دارای <b>چهار سیم</b> می‌باشد، ولتاژ مربوط به هر سیم در جدول زیر نمایش داده شده است.
                </p>
                <img class="img-responsive" alt="ولتاژ سیم‌های کانکتور MOLEX" style="max-width:350px;" src="/images/md/power_supply/ولتاژ-سیم-کانکتور-molex.jpg">
                <table class="table table-bordered table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>شماره پین</th>
                            <th>رنگ</th>
                            <th>ولتاژ (ولت)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>۱</td>
                            <td>زرد</td>
                            <td>۱۲</td>
                        </tr>
                        <tr>
                            <td> ۲</td>
                            <td>مشکی</td>
                            <td>صفر (اتصال به زمین)</td>
                        </tr>
                        <tr>
                            <td>۳</td>
                            <td>مشکی</td>
                            <td>صفر (اتصال به زمین)</td>
                        </tr>
                        <tr>
                            <td>۴</td>
                            <td>قرمز</td>
                            <td>۵</td>
                        </tr>
                        
                    </tbody>
                </table>
                
                {{--  related links  --}}
                <div id="related-links">
                    
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection