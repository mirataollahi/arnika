@extends('layouts.layout')

@section('content')










<div class="container">

    <div class="register">
        <div class=" text-center">
            <div class="text-center" >لطفا اطلاعات خود را وارد کنید </div>

            
            

            
            <a href="#" class="alert-register text-center">در صورتی که قبلا ثبت نام کرده اید از این قسمت وارد شوید</a>
            <a href="#" class="btn btn-primary">ورود</a>
        </div>

        <hr style="border: 2px solid rgb(136, 179, 7)">



            <center>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <center>
            <div class="form-group">
                <label for="type">نوع کاربری</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox"  id="real-checkbox" onclick="realcheckbox()" value="option1">
                <label class="form-check-label" for="inlineRadio1">حقیقی</label>
            </div>
            <div class="form-check form-check-inline form-item">
                <input class="form-check-input" type="checkbox" id="legal-checkbox"  onclick="legalcheckbox()" value="option2">
                <label class="form-check-label" for="inlineRadio2">حقوقی</label>
            </div>
            </center>

            
              
    





            <form id="real-user-form" method="post" action="/real_user_register">
                @csrf




                <hr>
                <div class="form-group form-item">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text" class="form-control text-center" id="name" name="name" aria-describedby="emailHelp" placeholder="نام و نام خانوادگی خود را وارد کنید">
                </div>

                <hr>

                <div class="form-group form-item">
                    <label for="name">کد ملی</label>
                    <input type="text" class="form-control text-center" id="national_code" name="national_code"  placeholder="لطفا کد ملی را وارد کنید ">
                </div>

                <hr>
                <div class="form-group form-item">
                    <label for="name">تاریخ تولد</label>
                    <input type="data" class="form-control text-center" id="birthday" name="birthday"  placeholder="تاریخ تولدتان را وارد کنید ">
                </div>


                <hr>
                <div class="form-group form-item">
                    <label for="name">آدرس</label>
                    <div class="row">
                        <div class="col">
                            استان
                            <select class="form-control m-input" id="state" name="state" style="height: 46px">
                                <option>تهران</option>
                                <option>گیلان</option>
                                <option>آذربایجان شرقی</option>
                                <option>خوزستان</option>
                                <option>فارس</option>
                                <option>اصفهان</option>
                                <option>خراسان رضوی</option>
                                <option>قزوین</option>
                                <option>سمنان</option>
                                <option>قم</option>
                                <option>مرکزی</option>
                                <option>زنجان</option>
                                <option>مازندران</option>
                                <option>گلستان</option>
                                <option>اردبیل</option>
                                <option>آذربایجان غربی</option>
                                <option>همدان</option>
                                <option>کردستان</option>
                                <option>کرمانشاه</option>
                                <option>لرستان</option>
                                <option>بوشهر</option>
                                <option>کرمان</option>
                                <option>هرمزگان</option>
                                <option>چهارمحال و بختیاری</option>
                                <option>یزد</option>
                                <option>سیستان و بلوچستان</option>
                                <option>ایلام</option>
                                <option>کهگلویه و بویراحمد</option>
                                <option>خراسان شمالی</option>
                                <option>خراسان جنوبی</option>
                                <option>البرز</option>
                            </select>
                        </div>
                        <div class="col">
                            شهر
                            <input type="text" style="margin-top: 5px" class="form-control text-center" id="city" name="city"   placeholder="لطفا شهر خود را انتخاب کنید ">

                        </div>
                    </div>

                    <input type="text" style="margin-top: 5px" class="form-control text-center" id="addres" name="addres"   placeholder="لطفا آدرس را وارد کنید ">
                    <input type="text" style="margin-top: 5px" class="form-control text-center" id="user_zip_code" name="user_zip_code"   placeholder="لطفا کد پستی را وارد کنید (اختیاری)  ">

                </div>

                <hr>
                <div class="form-group form-item">
                    <label for="name">تلفن ثابت</label>
                    <input type="text" class="form-control text-center" id="phone"  name="phone"  placeholder="لطفا تلفن ثابت خود را وارد کنید ">
                </div>

                <hr>
                <div class="form-group form-item">
                    <label for="name">موبایل</label>
                    <input type="text" class="form-control text-center" id="mobile" name="mobile" placeholder="لطفا شماره همراه خود را وارد کنید">
                </div>

                <hr>
                <div class="form-group form-item">
                    <label for="name">عنوان کسب و کار</label>
                    <input type="text" class="form-control text-center" id="business_title" name="business_title"  placeholder="لطفا عنوان کسب و کار خود را وارد کنید">
                </div>


                <hr>
                <div class="form-group form-item">
                    <label for="name">کلمه عبور</label>
                    <input type="password" class="form-control text-center" id="user_password" name="user_password"  placeholder="کلمه عبور را وارد کنید">
                </div>


                <hr>
                <div class="form-group form-item">
                    <label for="name">تکرار کلمه عبور</label>
                    <input type="password" class="form-control text-center" id="user_re_password" name="user_re_password"  placeholder="تکرار کلمه عبور را وارد کنید">
                </div>
                

                <hr>
                <div class="form-group form-item">
                    <input type="submit" class="form-control btn btn-primary text-center"  value="ثبت نام و ثبت نهایی سفارش">
                </div>

                
                


            </form>



            <form id="legal-user-form" method="post" action="/legal_user_register">
                @csrf
                <hr>
                <div class="form-group form-item">
                    <label for="name">نام شرکت</label>
                    <input type="text" class="form-control text-center" id="company_name" name="company_name"   placeholder="لطفا نام شرکت را وارد کنید ">
                </div>





                <hr>
                <div class="form-group form-item">
                    <label for="name">شناسه ملی</label>
                    <input type="text" class="form-control text-center" id="national-code" name="national-code"   placeholder="لطفا شناسه ملی شرکت را وارد کنید">
                </div>




                <hr>
                <div class="form-group form-item">
                    <label for="name">کد اقتصادی</label>
                    <input type="text" class="form-control text-center" id="economic_code" name="economic_code" placeholder="لطفا کد اقتصادی شرکت را وارد کنید">
                </div>



                <hr>
                <div class="form-group form-item">
                    <label for="name">آدرس</label>
                    <div class="row">
                        <div class="col">
                            استان
                            <select class="form-control m-input" id="state" name="legal-state" style="height: 46px">
                                <option>تهران</option>
                                <option>گیلان</option>
                                <option>آذربایجان شرقی</option>
                                <option>خوزستان</option>
                                <option>فارس</option>
                                <option>اصفهان</option>
                                <option>خراسان رضوی</option>
                                <option>قزوین</option>
                                <option>سمنان</option>
                                <option>قم</option>
                                <option>مرکزی</option>
                                <option>زنجان</option>
                                <option>مازندران</option>
                                <option>گلستان</option>
                                <option>اردبیل</option>
                                <option>آذربایجان غربی</option>
                                <option>همدان</option>
                                <option>کردستان</option>
                                <option>کرمانشاه</option>
                                <option>لرستان</option>
                                <option>بوشهر</option>
                                <option>کرمان</option>
                                <option>هرمزگان</option>
                                <option>چهارمحال و بختیاری</option>
                                <option>یزد</option>
                                <option>سیستان و بلوچستان</option>
                                <option>ایلام</option>
                                <option>کهگلویه و بویراحمد</option>
                                <option>خراسان شمالی</option>
                                <option>خراسان جنوبی</option>
                                <option>البرز</option>
                            </select>
                        </div>
                        <div class="col">
                            شهر
                            <input type="text" style="margin-top: 5px" class="form-control text-center" id="legal_city" name="legal_city"   placeholder="لطفا آدرس را وارد کنید ">

                        </div>
                    </div>

                    <input type="text" style="margin-top: 5px" class="form-control text-center" id="legal_addres" name="addres"   placeholder="لطفا آدرس را وارد کنید ">
                    <input type="text" style="margin-top: 5px" class="form-control text-center" id="legal_zip_code" name="user_zip_code"   placeholder="لطفا کد پستی را وارد کنید (اختیاری)  ">

                </div>

             


                <hr>
                <div class="form-group form-item">
                    <label for="name">تلفن ثابت</label>
                    <input type="text" id="company_phone" name="company_phone" class="form-control text-center"  placeholder="لطفا تلفن ثابت شرکت وارد کنید">
                </div>


                <hr>
                <div class="form-group form-item">
                    <label for="name">مدیر عامل</label>
                    <input type="text" id="manager" name="manager" class="form-control text-center"  placeholder="نام و نام خانوادگی مدیر عامل را وارد کنید ">
                </div>


                <hr>
                <div class="form-group form-item">
                    <label for="name">موبایل</label>
                    <input type="text" id="manager_mobile" name="manager_mobile" class="form-control text-center"  placeholder="لطفا شماره همراه مدیر عامل را وارد کنید">
                </div>



                <hr>
                <div class="form-group form-item">
                    <input type="submit" class="form-control btn btn-primary text-center"  value="ثبت نهایی سفارش">
                </div>

                


            </form>



        </div>
        </center>

        </div>
        

    </div>
    
</div>


<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/reg-form.js"></script>




@endsection