@extends('admin.layouts.layout')

@section('content')

  <div class="container">
    <hr>
    <a href="/admin/products" class="link-secondary route" >محصولات</a>
    /
    <a href="/admin/products/edit/{{ $product->id }}" class="link-secondary route" >{{ $product->title }}</a>
    /
    <a href="/admin/products/systems/pers/{{ $system->id }}" class="link-secondary route active" >پیشنیاز {{ $system->title }}</a>

  </div>



    <div class="alert alert-success text-center" style="margin:10px;">
        پیشنیاز های سیستم 
        {{ $system->title }}
    </div>

    <center>
    <div class="alert alert-dark text-center"  style="width: 200px">
            
      <form action="/admin/products/systems/pres/create/{{ $system->id }}" method="post">
        <input text="text" name="_token" value="<?= csrf_token() ?>" type="hidden" >

          <div class="row">
            <div class="form-group col">
                <label for="system">ایتم : </label>
                <select name="pre_system_id" class="form-control" data-size="10" >
                  @foreach ($systems as $sy )
                      <option value="{{ $sy->id }}">{{ $sy->title }}</option>
                  @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary col">اضافه کردن به پیش نیاز ها</button>
          </div>


      </form>
    </div>
    </center>



    <div class="container">
        @if(count($pres) < 0)
            <div class="alert alert-warning">
                برای این سیستم پیش نیازی تعریف نشده است 
            </div>
        @endif


        @if(count($pres) > 0)
        <table class="table table-dark" >
            <thead>
              <tr>
                <th scope="col">شماره</th>
                <th scope="col">پیش نیاز</th>
                <th scope="col">حذف</th>

              </tr>
            </thead>
            <tbody>
            @foreach ($pres as $pre)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $pre->title }}</td>
                    <td><a class="btn btn-danger" href="/admin/products/systems/pres/delete/{{ $pre->id }}">حذف پیشنیاز</a></td>

              </tr>
            @endforeach
            </tbody>
          </table>
          @endif

          
    </div>
    
@endsection