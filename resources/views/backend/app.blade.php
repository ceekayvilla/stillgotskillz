<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('backend.partials.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('storage/'.config('settings.site_favicon'))}}"/>
</head>
<body>

    <div class="page-container dashboard-main-wrapper app-content">
        @include('backend.partials.sidebar')
        <div class="main-content">
            @include('backend.partials.header')
            @include('backend.partials.pagetitle')
                @yield('content')
        </div>
        @include('backend.partials.footer')
    </div>
    @include('backend.partials.js')
    @stack('scripts')
</body>
</html>