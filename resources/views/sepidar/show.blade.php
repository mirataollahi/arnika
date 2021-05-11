@extends('layouts.layout')

@section('content')

<div class="container">

    @foreach ( $sepidarRequests as $sepidarRequest )
    <div class="alert alert-primary" style="margin-top: 20px">
        <h4>{{ $sepidarRequest->name }}</h4>
        
        <div class="row">
            <P class="col">شماره همراه : {{ $sepidarRequest->phone_number }}</P>
            <P class="col">شرکت : {{ $sepidarRequest->company }}</P>
            <P class="col">استان : {{ $sepidarRequest->city }}</P>
        </div>
        
        <hr style="border: 3px solid green">
        <p>ایتم های  : </p>

        <p style="color: black"> سیستم ها : </p>
        @if( $sepidarRequest->system1 == true)
        <p>سیستم دارایی ثابت</p>
        @endif
        @if( $sepidarRequest->system2 == true)
        <p>سیستم دریافت و پرداخت</p>
        @endif
        @if( $sepidarRequest->system3 == true)
        <p>سیستم تامین کنندگان و انبار تولیدی</p>
        @endif
        @if( $sepidarRequest->system4 == true)
        <p>سیستم حقوق و دستمزد</p>
        @endif
        @if( $sepidarRequest->system5 == true)
        <p>سیستم مشتریان و فروش</p>
        @endif
        @if( $sepidarRequest->system6 == true)
        <p>سیستم تامین کنندگان و انبار بازرگانی</p>
        @endif
        @if( $sepidarRequest->system7 == true)
        <p>سیستم فروش خدماتی</p>
        @endif
        @if( $sepidarRequest->system8 == true)
        <p>سیستم فروش خدماتی</p>
        @endif
        @if( $sepidarRequest->system9 == true)
        <p>حسابداری پیمانکاری</p>
        @endif
        @if( $sepidarRequest->system10 == true)
        <p>سیستم تولید</p>
        @endif
        @if( $sepidarRequest->system11 == true)
        <p>سیستم مدیریت تردد اثر انگشت (شامل سخت‌افزار و نرم‌افزار)</p>
        @endif
        @if( $sepidarRequest->system12 == true)
        <p>سیستم سفارش گیری</p>
        @endif
        @if( $sepidarRequest->system13 == true)
        <p>سیستم پخش سرد</p>
        @endif
        @if( $sepidarRequest->system14 == true)
        <p>سیستم پخش گرم</p>
        @endif
        @if( $sepidarRequest->system15 == true)
        <p>سیستم سفارشات و خرید خارجی</p>
        @endif


        <hr>
        <p style="color: black">زیر سیستم ها : </p>
        @if( $sepidarRequest->subsystem1 == true)
        <p>زیر سیستم ارزی</p>
        @endif

        @if( $sepidarRequest->subsystem2 == true)
        <p>فروش پیشرفته</p>
        @endif

        @if( $sepidarRequest->subsystem3 == true)
        <p>زیر سیستم توزین</p>
        @endif

        @if( $sepidarRequest->subsystem4 == true)
        <p>زیر سیستم دو زبانه</p>
        @endif
        @if( $sepidarRequest->subsystem5 == true)
        <p>مدیریت پیام</p>
        @endif
        @if( $sepidarRequest->subsystem6 == true)
        <p>زیر سیستم ردیابی</p>
        @endif
        @if( $sepidarRequest->subsystem7 == true)
        <p>زیر سیستم دو واحدی</p>
        @endif
        @if( $sepidarRequest->subsystem8 == true)
        <p>تبدیل انبار بازرگانی به تولیدی</p>
        @endif
        @if( $sepidarRequest->subsystem9 == true)
        <p>زیر سیستم موبایل و تبلت سفارش گیری</p>
        @endif


        <hr>
        <div class="row">
            <div class="col">تعداد قفلی مدیریتی صرفاً جهت مشاهده اطلاعات و گرفتن گزارش : {{ $sepidarRequest->tool1 }}</div>
            <div class="col">تعداد کاربرهای همزمان با امکان ایجاد سطح دسترسی : {{ $sepidarRequest->tool2 }}</div>
            <div class="col">ثبت اطلاعات جداگانه چندین شرکت مجزا (چند شرکتی) : {{ $sepidarRequest->tool3 }}</div>
            <div class="col">با خرید سیستم تردد اضافی، مبلغ سیستم دوم شامل 10% تخفیف خواهد بود. : {{ $sepidarRequest->tool4 }}</div>
            <div class="col">تعداد کاربر اضافه موبایل و تبلت سفارش گیری : {{ $sepidarRequest->tool5 }}</div>



        </div>


    </div>
    @endforeach
    
</div>

@endsection