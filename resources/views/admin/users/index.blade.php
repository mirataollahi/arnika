@extends('admin.layouts.layout')

@section('content')

  <div class="container">
    <hr>
    <a href="/admin/users" class="link-secondary route active" >مشتریان</a>

    <div class="container">
        <div class="alert alert-primary" style="margin-top : 25px">
            لیست مشتریان
        </div>

 

          



    </div>





    <div class="m-portlet">
      <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
          <div class="m-portlet__head-title">
            <h3 class="m-portlet__head-text">
              اخرین مشتریانی که ثبت نام انجام دادند

            </h3>
          </div>
        </div>
      </div>
      <div class="m-portlet__body">
        
        <table class="table table-striped m-table">
          <thead>
              <tr>
                <th>#</th>
                <th>نام و نام خانوادگی</th></th>
                <th>ایمیل</th>
                <th class="text-center">علیات</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($users as $user )
                
              
              <tr>
                <th scope="row">1</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <a class="btn btn-danger" >حذف کاربر</a>
                  <a class="btn btn-warning">ویرایش کاربر</a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>  


      </div>
    </div>
    
    

  </div>




          
    
@endsection