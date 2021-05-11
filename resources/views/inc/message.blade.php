@if( count($errors) > 0 )
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger text-center">
            {{ $error }}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success text-center" style="margin-top: 10px">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger text-center" tyle="margin-top: 10px">
        {{ session('error') }}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning text-center" tyle="margin-top: 10px">
        {{ session('error') }}
    </div>
@endif



