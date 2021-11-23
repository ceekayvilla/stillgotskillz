<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    @include('frontend.partials.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg">
    @include('frontend.partials.mobilemenu')
    @include('frontend.partials.mainmenu')
    @yield('content')
    @include('frontend.partials.footer')
    @include('frontend.partials.js')
</body>
</html>
