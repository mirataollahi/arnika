@extends('admin.layouts.layout')

@section('content')
    <div class="container">
        <hr>
        <a href="/admin/products" class="link-secondary route active" >محصولات</a>
    </div>
    
    <div class="alert alert-success" style="margin:10px;">
        لیست محصولات  
    </div>

    <div class="container">
        <a class="btn btn-info" href="/admin/products/create" style="margin-bottom: 10px">اضافه کردن محصول جدید</a>
        @if(count($products) <= 0)
            <div class="alert alert-warning">
                در حال حاضر محصولی تعریف نشده است 
            </div>
        @endif


        @if(count($products) > 0)
        <?php $i = 0 ?>
        <table class="table products-index" >
            <thead>
              <tr>
                <th scope="col">شماره</th>
                <th scope="col">عنوان</th>
                <th scope="col">وضعیت</th>
                <th scope="col">مشاهده</th>
                <th scope="col">ویرایش</th>
                <th scope="col">حذف</th>

              </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <?php $i++  ?>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $product['title'] }}</td>
                    <td>
                        @if($product['condition'] == 'active')
                            فعال
                        @endif
                        @if($product['condition'] == 'disable')
                            غیرفعال
                        @endif
                    </td>
                    <td><a class="btn btn-success" onclick="window.open('/sepidar','_blank')">مشاهده محصول</a></td>
                    <td><a class="btn btn-primary" href="/admin/products/edit/{{ $product['id'] }}">مدیریت محصول</a></td>
                    <td><a class="btn btn-danger" href="/admin/products/delete/{{ $product['id'] }}">حذف محصول</a></td>

              </tr>
            @endforeach
            </tbody>
          </table>
          @endif
    </div>
    
@endsection