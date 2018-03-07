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
                 <h3>پورت MIDI</h3>
                 <p>
                        MIDI مخفف عبارت Musical Instrument Digital Interface است. این نوع پورت در سال ۱۹۸۰ معرفی شد. پورت MIDI دارای ۱۵ سوراخ در دو ردیف می باشد و برای اتصال <b>تجهیزات موسیقی</b> الکترونیکی  به کامپیوتر (<a href="">کارت صدا</a>) استفاده می‌شود. همچنین این پورت برای اتصال <b>کنترل‌کننده‌‌های بازی</b> (Game Pad) نیز مورد استفاده قرار می‌گیرد.
                </p>
                 <img class="img-responsive" alt="پورت MIDI یا Game" style="max-width:200px;" src="/images/md/ports/پورت-midi-game.jpg">
                 <p>
                        برای اتصال وسایل MIDI به این پورت، یک کابل تبدیل MIDI به <b>کانکتور ۵ پین</b> DIN (یا تبدیل USB) مورد نیاز است.
                 </p>
                 <img class="img-responsive" alt="اتصال دستگاه MIDI به کامپوتر از طریق کابل تبدیل" style="max-width:300px;" src="/images/md/ports/اتصال-دستگاه-midi.jpg">
                 
                {{--  related links  --}}
                <div id="related-links">

                </div>
            </div>
        </div>
    </div>
@endsection