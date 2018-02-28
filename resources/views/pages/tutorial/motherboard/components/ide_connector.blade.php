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
                <h3>کانکتور IDE</h3>
                <p>
                        IDE کوتاه شده عبارت Integrated Drive Electronics یا IBM Disk Electronics می‌باشد. همچنین IDE را  ATA یا Parallel ATA یا (PATA) نیز می‌نامند. IDE کانکتور مورد استفاده برای اتصال هارد و دی وی دی رایتر در مادربورد‌های قدیمی‌تر می‌باشد.
                </p>
                <p>
                        در زیر می‌توانید تصویر پشت یک هارد و محل قرار گیری کانکتور IDE را به وضوح مشاهده کنید.
                </p>
                <img style="width:250px;" class="img-responsive" alt="پشت هارد ide" src="/images/md/motherboard/پشت-هارد-ide.jpg">
                
                <h4>اتصال کابل IDE</h4>
                <p>
                        کنار کانکتور IDE مادربورد در یک سمت آن عدد یک نوشته شده است؛ برای اتصال صحیح کابل به این کانکتور باید سمتی از کابل که رنگ دارد (معمولا قرمز) با جهت عدد یک تطابق داشته باشد. (به این قسمت کابل پین اول (first pin) نیز گفته می‌شود)
                </p>
                <p>
                        <span class="glyphicon glyphicon-hand-left"></span>هر کابل IDE قابلیت اتصال به دو درایور را دارد...
                </p>
                <img class="img-responsive" alt="کابل IDE یا ATA" src="/images/md/motherboard/کابل-ide-ata.jpg">
                {{--  related links  --}}
                <div id="related-links">

                </di>
                 
                
            </div>
        </div>
    </div>
@endsection