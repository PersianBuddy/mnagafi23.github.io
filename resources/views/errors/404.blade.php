@extends('layouts.app')

@section('title')
    صفحه مورد نظر یافت نشد
@endsection

@section('content')
    <div id="not-found">
        <div class="container text-center">
            <p>صفحه مورد نظر یافت نشد</p>
            <a href="{{url('/')}}" class="btn btn-danger">
                بازگشت به صفحه اصلی
            </a>
         </div>
    </div>
    
@endsection