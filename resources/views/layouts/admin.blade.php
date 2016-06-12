<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta)


    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    @yield('style')


</head>
<body id="app-layout">

@include('layouts.admin.navbar')

@yield('content')

@include('layouts.app.footer')

{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

@yield('script')
</body>
</html>
