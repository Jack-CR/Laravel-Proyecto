<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="header">
        @yield('header')
        @include('layouts.header')
    </div>

    <div class="container">
        @yield('container')
    </div>

    <div class="footer">
        @yield('footer')
    </div>

    <script src="{{ asset('bootstrap-5.0/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
