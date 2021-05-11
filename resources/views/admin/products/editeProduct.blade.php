@extends('admin.layouts.layout')

@section('content')

    <div class="container">
        <hr>
        <a href="/admin/products" class="link-secondary route" >محصولات</a>
        /
        <a href="/admin/products/edit/{{ $product->id }}" class="link-secondary route active" >{{ $product->title }}</a>
        

    </div>


    <div class="alert alert-info text-center" style="margin:10px;">
        <p>{{ $product->title }} </p>
    </div>
    <div class="container">

        <div class="systems admin-systems">
            <a href="/admin/products/systems/create/{{ $product->id }}" class="btn btn-dark" style="margin-bottom: 5px">تعریف سیستم جدید</a>
            <div class="alert alert-primary text-center">
                سیستم ها
            </div>
            
            @if(count($product->systems) <= 0)
                <div class="alert alert-warning">برای این محصول سیستمی تعریف نشد است </div>
            @endif
            @if(count($product->systems) > 0)
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">عنوان سیستم </th>
                    <th scope="col">قیمت</th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                    <th scope="col">پیشنیاز ها</th>


                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ;  ?>
                @foreach ($product->systems as $system )
                    <tr>
                        <th scope="row">{{ $i }} <?php $i++; ?></th>
                        <td>{{ $system->title }}<span style="color: red">@if($system->type == 'system')<?php echo '(سیستم)' ?>   @endif   @if($system->type == 'subsystem')<?php echo '(زیرسیستم)' ?>   @endif</span></td>
                        <td class="item-price">{{ $system->price }}</td>
                        <td><a class="btn btn-warning" href="/admin/products/systems/edit/{{ $system->id }}">ویرایش</a></td>
                        <td><a class="btn btn-danger" href="/admin/products/systems/delete/{{ $system->id }}">حذف</a></td>
                        <td><a class="btn btn-primary" href="/admin/products/systems/pers/{{ $system->id }}">پیشنیاز ها</a></td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            @endif
        </div>
        
        
        <div class="tools admin-systems">
            <a href="/admin/products/tools/create/{{ $product->id }}" class="btn btn-dark" style="margin-bottom: 5px">تعریف امکانات جانبی جدید</a>
            <div class="alert alert-primary text-center">
                امکانات جانبی
            </div>
            @if(count($product->tools) <= 0)
                <div class="alert alert-warning">برای این محصول امکانات جانبی تعریف نشد است </div>
            @endif
            @if(count($product->tools) > 0)
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">عنوان امکان جانبی</th> </th>
                    <th scope="col">عنوان تعداد</th>
                    <th scope="col">تعداد پیشفرض</th>
                    <th scope="col">حداکثر تعداد</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                    <th scope="col">پیشنیاز ها</th>


                  </tr>
                </thead>
                <tbody>
                    <?php $j = 1 ;  ?>
                @foreach ($product->tools as $tool )
                    <tr>
                        <th scope="row">{{ $j }} <?php $j++; ?></th>
                        <td >{{ $tool->title }}</td>
                        <td>{{ $tool->count_title }}</td>
                        <td>{{ $tool->default_count }}</td>
                        <td>{{ $tool->max_count }}</td>
                        <td class="item-price">{{ $tool->price }}</td>
                        <td><a class="btn btn-warning" href="/admin/products/tool/edit/{{ $tool->id }}">ویرایش</a></td>
                        <td><a class="btn btn-danger" href="/admin/products/tool/delete/{{ $tool->id }}">حذف</a></td>
                        <td><a class="btn btn-primary" href="/admin/products/tool/pers/{{ $tool->id }}">پیشنیاز ها</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>

        
    </div>

    
        
@endsection