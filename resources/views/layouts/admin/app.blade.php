<!DOCTYPE html>
<html lang="@yield('lang', 'pt')">
<head>
    @yield('after_open_head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@hasSection('title')
    <title>@yield('title') :: Admin</title>
@else
    <title>Admin</title>
@endif
    <link rel="stylesheet" href="{{ asset('assets/busea/css/styles.css') }}">
    @yield('before_close_head')
</head>
<body>
    @yield('content')
    <script src="{{ asset('assets/busea/js/bundle.js') }}"></script>
    {{-- <script src="{{ asset('assets/jquery/js/jquery.js') }}"></script> --}}
    <script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>
    @yield('before_close_body')
</body>
</html>