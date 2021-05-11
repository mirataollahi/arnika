@extends('admin.layouts.layout')

@section('content')

    <div class="container">
        <hr>
        <a href="/admin/products" class="link-secondary route" >محصولات</a>
        /
        <a href="/admin/products/edit/{{ $product->id }}" class="link-secondary route active" >{{ $product->title }}</a>
        /
        <a href="/admin/products/systems/create/{{ $product->id }}" class="link-secondary route active" >اضافه کردن سیستم جدید به {{ $product->title }}</a>


    </div>


    <div class="alert alert-success" style="margin:10px;">
        اضافه کردن محصول جدید 
    </div>

    <div class="container">
        <form class="m-form m-form--fit m-form--label-align-right" action="/admin/products/systems/create" method="post">
            <input text="text" name="_token" value="<?= csrf_token() ?>" type="hidden" >
            <input type="hidden" name="product_id" value="{{ $product->id }}" >
            <div class="m-portlet__body">



                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">عنوان</label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="text" name="title" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">قیمت</label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="text" name="price" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">نوع</label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <select class="form-control" name="type">
                            <option>سیستم</option>
                            <option>زیرسیستم</option>
                        </select>
                    </div>
                </div>
    
                
    
    
                
    
    
               
    
                
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <input type="submit" class="btn btn-brand" value="ثبت">
                            <button type="reset" class="btn btn-secondary">لغو</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
@endsection