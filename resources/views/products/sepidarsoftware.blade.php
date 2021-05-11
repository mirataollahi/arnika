@extends('layouts.layout')

@section('content')
<form class="registerform" action="/sepidar" method="post">
<div class="container">
    <h3 class="product-title">
        قیمت نرم افزار حسابداری سپیدار همکاران سیستم
    </h3>
    <hr class="hr-title">

    <h6 class="description-top">در زیر قیمت سیستم‌های نرم افزار حسابداری سپیدار را مشاهده می‌نمایید. جهت ثبت سفارش و یا هماهنگی جهت جلسه حضوری اطلاعات خود را ثبت نمایید.</h6>

    <div class="container">
    <div class="row">



        <div class="systems col-lg-6  col-xs-12 col-sm-12">
            <div class="systems-title">
                سیستم‌ها
            </div>

            <div class="systems-feature sy1">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" id="system1" name="system1" checked>

                        

                        <div class="col-7 align-self-center system-feature-title">
                            سیستم حسابداری
                        </div>
                
                        <div class="col-4 lign-self-end system-feature-price">
                            23,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sy2">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system2" id="system2"  onclick='handleClick2(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم دارایی ثابت
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            37,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sy3">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system3" id="system3"  onclick='handleClick3(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم دریافت و پرداخت
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            35,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>


            <div class="systems-feature sy4">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system4" id="system4"  onclick='handleClick4(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم تامین کنندگان و انبار تولیدی
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            47,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>



            <div class="systems-feature sy5">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system5" id="system5"  onclick='handleClick5(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم حقوق و دستمزد
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            46,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>



            <div class="systems-feature sy6">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox"name="system6" id="system6"  onclick='handleClick6(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم مشتریان و فروش
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                           47,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>



            <div class="systems-feature sy7">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system7" id="system7"  onclick='handleClick7(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم تامین کنندگان و انبار بازرگانی
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            42,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sy8">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system8" id="system8"  onclick='handleClick8(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم فروش خدماتی
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            44,000,000 
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sy9">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system9" id="system9"  onclick='handleClick9(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            حسابداری پیمانکاری
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                           53,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>


            <div class="systems-feature sy10">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system10" id="system10"  onclick='handleClick10(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم تولید
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            45,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>


            <div class="systems-feature sy11">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox"name="system11" id="system11"  onclick='handleClick11(this);'>

                        <div class="col-8 align-self-center system-feature-title sy11-title">
                            سیستم مدیریت تردد اثر انگشت (شامل سخت‌افزار و نرم‌افزار)
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            110,000,000 
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sy12">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox"name="system12" id="system12"  onclick='handleClick12(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم سفارش گیری
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                           66,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sy13">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system13" id="system13"  onclick='handleClick13(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم پخش سرد
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                           105,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sy14">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system14" id="system14"  onclick='handleClick14(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم پخش گرم
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            105,000,000 
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sy15">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="system15" id="system15"  onclick='handleClick15(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            سیستم سفارشات و خرید خارجی
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                           55,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>



        </div>



        <div class="sub-systems col-lg-6   col-xs-12 col-sm-12">
            <div class="systems-title">
                زیر سیستم‌ها
            </div>

            <div class="systems-feature su1">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="subsystem1" id="subsystem1"  onclick='handleClicksub1(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            زیر سیستم ارزی
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            20,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>


            <div class="systems-feature su2">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="subsystem2" id="subsystem2"  onclick='handleClicksub2(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            فروش پیشرفته
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            30,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>


            <div class="systems-feature su3">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="subsystem3"id="subsystem3"  onclick='handleClicksub3(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            زیر سیستم توزین
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            13,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>


            <div class="systems-feature su4">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="subsystem4" id="subsystem4"  onclick='handleClicksub4(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            زیر سیستم دو زبانه
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            27,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>


            <div class="systems-feature su5">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="subsystem5" id="subsystem5"  onclick='handleClicksub5(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            مدیریت پیام
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            7,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature su6">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="subsystem6" id="subsystem6"  onclick='handleClicksub6(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            زیر سیستم ردیابی
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            15,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature su7">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="subsystem7" id="subsystem7"  onclick='handleClicksub7(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            زیر سیستم دو واحدی
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            15,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>


            <div class="systems-feature su8">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="subsystem8" id="subsystem8"  onclick='handleClicksub8(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            تبدیل انبار بازرگانی به تولیدی
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            12,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature su9">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="subsystem9" id="subsystem9"  onclick='handleClicksub9(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            زیر سیستم موبایل و تبلت سفارش گیری
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            33,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>


            <div class="systems-title" style="margin-bottom: 5px">
                خدمات
            </div>

            <div class="systems-feature sr1">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="service1" id="service1"  onclick='srvice1handle(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            نصب در محیط شبکه حضوری
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            60,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sr2">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="service2" id="service2"  onclick='srvice2handle(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            نصب نسخه تک کاربره حضوری
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            40,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>

            <div class="systems-feature sr3">
                <div class="container-fluid">
                    <div class="row">
                        <input class="col-1  align-self-start system-feature-check" type="checkbox" name="service3" id="service3"  onclick='srvice3handle(this);'>

                        <div class="col-8 align-self-center system-feature-title">
                            نصب تردد
                        </div>
                
                        <div class="col-3 lign-self-end system-feature-price">
                            4,000,000
                        ریال
                        </div>
                    </div>   
                </div>
            </div>






        </div>

    </div>

    </div>

    <div class="row">
        <div class="col-12">
            <div class="tools-title">
                امکانات جانبی
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6  col-xs-12 col-sm-12">
            <div class="tool">
                
                <div class="">
                    قفلی مدیریتی صرفاً جهت مشاهده اطلاعات و گرفتن گزارش
                </div>

                <div class="tool-count">
                    <span class="">تعداد قفل مشاهده : </span>
                   

                   <select id="tools1" name="tools1" onchange="selecttools1()" class="form-control" data-size="5">
                       <option>0</option>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                       <option>6</option>
                       <option>7</option>
                       <option>8</option>
                       <option>9</option>
                       <option>10</option>
                   </select>
                </div>

                <div class="tool-count-old">
                    تعداد قفل مشاهده پیشفرض : 0
                </div>
                <center>
                    <div class="tool-price">
                     قیمت : 
                    <span class="price" id="toolprice1" name="toolprice1">0</span>
                    <span class="price">ریال</span>
                    </div>
                </center>
                
            </div>
        </div>
        <div class="col-lg-6  col-xs-12 col-sm-12">
            <div class="tool">
                
                <div class="">
                    تعداد کاربرهای همزمان با امکان ایجاد سطح دسترسی
                </div>


                <div class="tool-count">
                    تعداد کاربر : 


                   <select  id="tools2" name="tools2" onchange="selecttools2()" class="form-control"  data-size="5">
                       <option>0</option>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                       <option>6</option>
                       <option>7</option>
                       <option>8</option>
                       <option>9</option>
                       <option>10</option>
                       <option>11</option>
                   </select>
                </div>

                <div class="tool-count-old">
                    تعداد کاربر پیش فرض : 1
                </div>
                <center>
                    <div class="tool-price">
                     قیمت : 
                    <span class="price" id="toolprice2" name="toolprice2">0</span>
                    <span class="price">ریال</span>
                    </div>
                </center>
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6  col-xs-12 col-sm-12">
            <div class="tool">
                
                <div class="">
                    ثبت اطلاعات جداگانه چندین شرکت مجزا (چند شرکتی)
                </div>


                <div class="tool-count">
                    چند شرکت همزمان

                   <select id="tools3" name="tools3" onchange="selecttools3()" class="form-control" data-size="5">
                       <option>0</option>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                       <option>6</option>
                       <option>7</option>
                       <option>8</option>
                   </select>
                </div>

                <div class="tool-count-old">
                    تعداد شرکت پیش فرض : 0
                </div>
                <center>
                    <div class="tool-price">
                     قیمت : 
                    <span class="price" id="toolprice3" name="toolprice3">0</span>
                    <span class="price">ریال</span>
                    </div>
                </center>
                
            </div>
        </div>
        <div class="col-lg-6  col-xs-12 col-sm-12">
            <div class="tool">
                
                <div class="">
                    با خرید سیستم تردد اضافی، مبلغ سیستم دوم شامل 10% تخفیف خواهد بود.
                </div>


                <div class="tool-count">
                    تعداد اضافی سیستم تردد


                   <select class="form-control" name="tools4" id="tools4"  disabled onchange="selecttools4()" >
                       <option>0</option>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                       <option>6</option>
                       <option>7</option>
                       <option>8</option>
                       <option>9</option>
                       <option>10</option>
                       <option>11</option>
                   </select>
                </div>

                <div class="tool-count-old">
                    تعداد اضافی سیستم تردد پیش فرض : 0
                </div>
                <center>
                    <div class="tool-price">
                     قیمت : 
                    <span class="price" id="toolprice4" name="toolprice4">0</span>
                    <span class="price">ریال</span>
                    </div>
                </center>
                
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6  col-xs-12 col-sm-12">
            <div class="tool">
                
                <div class="">
                    تعداد کاربر اضافه موبایل و تبلت سفارش گیری
                </div>


                <div class="tool-count"  >
                    <span class="mobilecount">تعداد کاربر اضافه موبایل و تبلت سفارش گیری :</span>
                     

                   <select disabled class="form-control"  name="tools5" id="tools5" onchange="selecttools5()" data-size="5">
                       <option>0</option>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                       <option>6</option>
                       <option>7</option>
                       <option>8</option>
                   </select>
                </div>

                <div class="tool-count-old">
                    تعداد کاربر پیش فرض : 1
                </div>
                <center>
                    <div class="tool-price">
                     قیمت : 
                    <span class="price" name="toolprice5" id="toolprice5">0</span>
                    <span class="price">ریال</span>
                    </div>
                </center>
                
            </div>
        </div>
        <div  class="col-lg-6  col-xs-12 col-sm-12"></div>
        
    </div>


    <div class="row">
        <div class="col-12">
            <div class="tools-title">
                اطلاعات تکمیلی
            </div>
        </div>
    </div> 


    <div class="container">

        <div class="row confirm-box">
        <div class="col-lg-6  col-xs-12 col-sm-12 final">
            <table>
                <tr>
                    <td>قیمت کل:</td>
                    <td class="price" id="finalpricelable">23,000,000</td>
                    <td>ریال</td>
                </tr>

                <tr  id = "offcontent">
                    <td>10% تخفیف خرید بسته:</td>
                    <td class="price" id="off">2,070,000</td>
                    <td>ریال</td>
                </tr>


                <tr>
                    <td>مالیات و عوارض:</td>
                    <td class="price" id="taxation">2,070,000</td>
                    <td>ریال</td>
                </tr>
                <tr>
                    <td>جمع کل: </td>
                    <td class="price" id="totalprice">25,070,000</td>
                    <td>ریال</td>
                </tr>
            </table>
            <hr>
            <p class="final-discription">
                خدمات نصب در محیط شبکه صرفا توسط نمایندگان ارائه می‌گردد و هزینه آن ۶،۰۰۰،۰۰۰ ریال است. برای نصب در خارج از شهر هزینه ایاب و ذهاب بعهده مشتری می‌باشد.
خدمات نصب نسخه تک کاربره صرفا توسط نمایندگان ارائه می‌گردد و هزینه آن ۴،۰۰۰،۰۰۰ ریال است. برای نصب در خارج از شهر هزینه ایاب و ذهاب بعهده مشتری می‌باشد.
خدمات در محل صرفا توسط نمایندگان و بصورت ساعتی ارائه می‌گردد و هزینه آن به ازای هر ساعت ۲،۰۰۰،۰۰۰ ریال است.
خدمات نصب تردد به ازای هر دستگاه مبلغ ۴،۰۰۰،۰۰۰ ریال است
            </p>
        </div>
        @csrf
            


        </div>

        <input class="btn btn-success col-12" id="register-btn" type="submit" value="ارسال سفارش">
    </div>

    <p>

        فرآیند خرید نرم افزار حسابداری سپیدار همکاران سیستم
جهت خرید نرم افزار حسابداری سپیدار می توانید موارد مورد نیاز خود را در این صفحه تکمیل نمایید. پس از آن کارشناسان ما با شما تماس می گیرند و ویژگی ها و امکانات نرم افزار را به شما معرفی می کنند. پس از تایید قیمت نرم افزار حسابداری سپیدار، امکان خرید آن برای شما وجود دارد


    </p>
   
    </div>
    
</div>

</form>

<script src="js/custom.js"></script>

@endsection