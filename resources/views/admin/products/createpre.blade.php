@extends('admin.layouts.layout')

@section('content')
    <div class="alert alert-success" style="margin:10px;">
        اضافه کردن پیش نیاز جدید
    </div>

    <div class="container">
        <form class="m-form m-form--fit m-form--label-align-right" action="/admin/products/systems/pres/create/{{ $system->id }}" method="post">
            <input text="text" name="_token" value="<?= csrf_token() ?>" type="hidden" >
            <div class="m-portlet__body">



                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">ایتم : </label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <select name="pre_system_id" class="form-control" data-size="10" style="height: 50px">
                            @foreach ($systems as $sy )
                                <option value="{{ $sy->id }}">{{ $sy->title }}</option>
                            @endforeach
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