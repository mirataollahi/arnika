@extends('admin.layouts.layout')

@section('content')

    <div class="container">
        <hr>
        <a href="/admin/products" class="link-secondary route" >محصولات</a>
        /
        <a href="/admin/products/edit/{{ $tool->product_id }}" class="link-secondary route" >{{ $product->title }}</a>
        /
        <a href="/admin/products/tools/create/{{ $tool->product_id }}" class="link-secondary route active" >ویرایش   {{ $tool->title }}</a>

    </div>



    <div class="alert alert-success text-center" style="margin:10px;">
        ویرایش 
        {{ $tool->title }}
    </div>

    <div class="container">
        <form class="m-form m-form--fit m-form--label-align-right" action="/admin/products/tool/edit/{{ $tool->id }}" method="post">
            <input text="text" name="_token" value="<?= csrf_token() ?>" type="hidden" >
            <div class="m-portlet__body">



                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">عنوان</label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="text" name="title" value="{{ $tool->title }}" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">عنوان تعداد</label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="text" name="count_title" value="{{ $tool->count_title }}" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                </div>


                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">تعداد پیش فرض</label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="text" name="default_count"  value="{{ $tool->default_count }}" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                </div>


                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">حداکثر تعداد</label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="text" name="max_count"  value="{{ $tool->max_count }}"  class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                </div>



                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">قیمت</label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="text" name="price"  value="{{ $tool->price }}" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                </div>

                
    
                
    
    
                
    
    
               
    
                
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <input type="submit" class="btn btn-brand" value="ثبت">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
@endsection