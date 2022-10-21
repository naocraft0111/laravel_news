<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NewsApp') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch"
        href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    {{-- Styles --}}
    <link rel="stylesheet"
        href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"
        defer></script>
</head>

<body>
    <div>
        @yield('header')
    </div>
    <div class="flex">
        <div class="w-1/6">
            @yield('sidebar')
        </div>
        <main class="w-full">
            @yield('content')
        </main>
    </div>
    <div>
        @yield('footer')
    </div>
</body>

</html>
