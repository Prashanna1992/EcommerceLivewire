<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('before_styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    @stack('after_styles')
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('frontend.includes.navbar')

    @yield('content')

    @stack('before_scripts')
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/sidenav.js')}}"></script>
    <script src="https://kit.fontawesome.com/e1af1eec22.js"></script>
    @stack('after_scripts')
</body>
</html>
