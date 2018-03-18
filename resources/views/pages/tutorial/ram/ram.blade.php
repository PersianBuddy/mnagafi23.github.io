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
                <h3>رَم (RAM) چیست؟</h3>
                <p>
                        از دیدگاه الکترونیک، حافظه‌ی رم، به حافظه‌ای گفته می‌شود، که از تراشه‌های نیمه‌هادی تولید شده است و <b>فرار</b> می‌باشد. یعنی با قطع برق، داده‌های ذخیره شده در آن از بین می‌روند. در حافظه‌ی رم دسترسی به هر نقطه‌ی آن در <b>زمان ثابتی</b> صورت می‌گیرد. از این رو به آن حافظه با دسترسی تصادفی یا <b>Random Access Memory</b> یا به اختصار RAM گفته می‌شود.
                </p>
                <h4>انواع حافظه‌های رم</h4>
                <p>
                    رم‌ها به دو نوع DRAM و SRAM تقسیم می‌شوند.
                </p>
                <ul class="custom-list">
                    <li><span class="sublist-title">DRAM :</span>   برای ذخیره سازی هر بیت از <b>یک خازن و یک ترانزیستور</b> استفاده می‌شود. به دلیل اینکه خازن می‌تواند پس از شارژ، تا مدتی بار الکتریکی  را در خود ذخیره کند، بعنوان ذخیره ساز مورد استفاده قرار می‌گیرد. </li>
                    <p>
                            خازن همیشه نشتی دارد. بنابرین پس از مدتی دشارژ (تخلیه) می‌شودو لازم است چند لحظه یک بار ( هر ۸ میکرو ثانیه)، مجدداً <b>شارژ</b> شود (به این کار <b>بازسازی</b> یا refresh گفته می‌شود)؛ در زمان بازیابی، حافظه‌ی RAM قابل دسترسی نیست که این مسئله باعث <b>کاهش کارایی</b> حافظه‌های DRAM می‌شود.
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-hand-left"></span>تراشه‌های نصب شده در اسلات‌های حافظه کامپیوتر از نوع <b>DRAM</b> می‌باشد. اما به اشتباه با نام RAM معرفی می‌شوند.
                    </p>
                    <li><span class="sublist-title">SRAM :</span> در حافظه‌های SRAM برای ذخیره‌سازی هر بیت، از <b>یک مدار منطقی</b> به نام flip-flop (وقتی پالسی را در ورودی خود دریافت می‌کند، از یک وضعیت ممکن به وضعیت دیگر می‌رود)، استفاده می‌کند. در ین مدار نیازی به بازیابی (refresh) نیست و کارایی بالاتری دارد. از این نوع حافظه در <a href=""><b>حافظه‌های کش</b></a> (Cache) استفاده می‌شود.</li>
                </ul>
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span><b>سرعت و قیمت</b> حافظه‌های SRAM بسیار بیشتر از حافظه‌های DRAM می‌باشد.
                </p>
                <h4>انواع حافظه‌های رم یا DRAM </h4>
                <p>
                        رم‌ها با فناوری‌های مختلفی تولید می‌شوند که انواع متداول آن به همراه برخی ویژگی‌های آن‌‌ها در جدول زیر نمایش داده شده است. 
                </p>
                <table class="table table-bordered table-condensed text-center table-striped">
                    <thead>
                        <tr>
                            <th>فناوری ساخت</th>
                            <th>نام استاندارد</th>
                            <th><a href="">Clock Speed</a> (سرعت ساعت) برحسب MHz</th>
                            <th>انتقال داده در هر <a href="">سیکل ساعت</a></th>
                            <th>سرعت گذرگاه (MHz)</th>
                            <th>سرعت انتقال داده‌ها (MB/s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3"><a href=""><b>SDRAM</b></a></td>
                            <td>PC-66</td>
                            <td>66</td>
                            <td>1</td>
                            <td>66</td>
                            <td>533</td>
                        </tr>
                        <tr>
                            <td>PC-100</td>
                            <td>100</td>
                            <td>1</td>
                            <td>100</td>
                            <td>800</td>
                        </tr>
                        <tr>
                            <td>PC-133</td>
                            <td>133</td>
                            <td>1</td>
                            <td>133</td>
                            <td>1066</td>
                        </tr>
                        <tr>
                            <td rowspan="4"><a href=""><b>DDR SDRAM</b></a></td>
                            <td>DDR-200</td>
                            <td>100</td>
                            <td>2</td>
                            <td>200</td>
                            <td>1600</td>
                        </tr>
                        <tr>
                            <td>DDR-226</td>
                            <td>133</td>
                            <td>2</td>
                            <td>266</td>
                            <td>2100</td>
                        </tr>
                        <tr>
                            <td>DDR-333</td>
                            <td>166</td>
                            <td>2</td>
                            <td>333</td>
                            <td>2700</td>
                        </tr>
                        <tr>
                            <td>DDR-400</td>
                            <td>200</td>
                            <td>2</td>
                            <td>400</td>
                            <td>3200</td>
                        </tr>
                        <tr>
                            <td rowspan="5"><a href=""><b>DDR2 SDRAM</b></a></td>
                            <td>DDR2-400</td>
                            <td>200</td>
                            <td>2</td>
                            <td>400</td>
                            <td>3200</td>
                        </tr>
                        <tr>
                            <td>DDR2-533</td>
                            <td>226</td>
                            <td>2</td>
                            <td>533</td>
                            <td>4266</td>
                        </tr>
                        <tr>
                            <td>DDR-667</td>
                            <td>333</td>
                            <td>2</td>
                            <td>667</td>
                            <td>5333</td>
                        </tr>
                        <tr>
                            <td>DDR2-800</td>
                            <td>400</td>
                            <td>2</td>
                            <td>800</td>
                            <td>6400</td>
                        </tr>
                        <tr>
                            <td>DDR2-1066</td>
                            <td>533</td>
                            <td>2</td>
                            <td>1066</td>
                            <td>8533</td>
                        </tr>
                        <tr>
                            <td rowspan="6"><a href=""><b>DDR3 SDRAM</b></a></td>
                            <td>DDR3-800</td>
                            <td>400</td>                  
                            <td>2</td>                  
                            <td>800</td>                  
                            <td>6400</td>                  
                        </tr>
                        <tr>
                            <td>DDR-1066</td>
                            <td>533</td>                  
                            <td>2</td>                  
                            <td>1066</td>                  
                            <td>8533</td>                  
                        </tr>
                        <tr>
                            <td> DDR-1333</td>
                            <td>667</td>                  
                            <td>2</td>                  
                            <td>1333</td>                  
                            <td>10667</td>                  
                        </tr>
                        <tr>
                            <td>DDR3-1600</td>
                            <td>800</td>                  
                            <td>2</td>                  
                            <td>1600</td>                  
                            <td>12800</td>                  
                        </tr>
                        <tr>
                            <td>DDR3-1866</td>
                            <td>933</td>                  
                            <td>2</td>                  
                            <td>1866</td>                  
                            <td>13900</td>                  
                        </tr>
                        <tr>
                            <td>DDR3-2133</td>
                            <td>1066</td>                  
                            <td>2</td>                  
                            <td>2133</td>                  
                            <td>17000</td>                  
                        </tr>
                        <tr>
                            <td rowspan="5"><a href=""><b>DDR4-SDRAM</b></a></td>
                            <td>DDR4-2133</td>
                            <td>1066</td>
                            <td>2</td>
                            <td>2133</td>
                            <td>1700</td>
                        </tr>
                        <tr>
                            <td>DDR4-2400</td>
                            <td>1200</td>
                            <td>2</td>
                            <td>2400</td>
                            <td>---</td>
                        </tr>
                        <tr>
                            <td>DDR4-2666</td>
                            <td>1333</td>
                            <td>2</td>
                            <td>2666</td>
                            <td>---</td>
                        </tr>
                        <tr>
                            <td>DDR4-2800</td>
                            <td>1400</td>
                            <td>2</td>
                            <td>2800</td>
                            <td>---</td>
                        </tr>
                        <tr>
                            <td>DDR4-3200</td>
                            <td>1600</td>
                            <td>2</td>
                            <td>3200</td>
                            <td>---</td>
                        </tr>
                    </tbody>
                </table>
                <h4>تفاوت DIMM و SIMM</h4>
                <p>
                        در رم‌های جدید پد‌های <b>حافظه در دو طرف</b> یا یکدیگر متفاوت هستند، به همین دلیل به نام <b>Dual</b> Inline Memory Module یا به اختصار DIMM شناخته می‌شوند. رم‌های قدیمی از نوع SIMM (S برای <b>Single</b>) و پد‌های دو طرف برد به هم متصل هستند و در عمل یک ردیف اتصال دهنده را ارائه می‌دهند.
                </p>
                {{--  related links  --}}
                <div id="related-links">
                    <a href="{{url('tutorial/RAM/مقایسه-RAM-و-ROM')}}">مقایسه RAM و ROM</a>
                    <a href="{{url('tutorial/RAM/فناوری-چند-کاناله-رم')}}">فناوری چند کاناله حافظه رم</a>
                </div>
                 
                
            </div>
        </div>
    </div>
@endsection