<!DOCTYPE html>
<html dir="rtl" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-rtl.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>
<body>
    
    <div id="app">
        <div id="custom-nav">
            <div class="row">
                <div class="col-xs-4">
                    @include('includes.user-navbar')
                </div>
            </div>
            
        </div>
        @include('includes.navbar')
        
        
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    {{--change english numbers into persian--}}
    {{--  <script src="{{ asset('js/persianumber.js') }}"></script>     --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
