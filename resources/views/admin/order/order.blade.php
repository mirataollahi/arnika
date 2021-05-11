@extends('admin.layouts.layout')

@section('content')

  <div class="container">
    <hr>
    <a href="/admin/users" class="link-secondary route active" >مشتریان</a>

    <div class="container">
        <div class="alert alert-primary" style="margin-top : 25px">
           لیست اخرین سفارشات ثبت شده 
        </div>

 

          



    </div>





    <div class="m-portlet">
      <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
          <div class="m-portlet__head-title">
            <h3 class="m-portlet__head-text">
              سفارشات

            </h3>
          </div>
        </div>
      </div>
      <div class="m-portlet__body">
        
        <table class="table table-striped m-table">
          <thead>
              <tr>
                <th>#</th>
                <th>نام</th></th>
                <th>تاریخ ثبت </th>
                <th>ایتم های مورد درخواست</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($SepidarRequests as $SepidarRequest )
                
              <?php

                $data = App\Services\ChangeTime::gregorianToJalali($SepidarRequest->created_at->year , $SepidarRequest->created_at->month ,$SepidarRequest->created_at->day)
            ?>
              <tr>
                <th scope="row">1</th>
                <td>{{ $SepidarRequest->name }}</td>
                <td> سال {{  $data['year'] }} ماه {{ $data['monthName'] }} روز {{ $data['day'] }} ساعت {{$SepidarRequest->created_at->hour  }}</td>
                <td><a href="#" class="btn btn-primary" >نمایش</a></td>
              </tr>
              @endforeach
          </tbody>
        </table>  


      </div>
    </div>
    
    

  </div>




          
    
@endsection