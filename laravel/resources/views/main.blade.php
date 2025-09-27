<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_styles.css') }}" rel="stylesheet">
</head>

<body>
    <div id="root">
        <div class="min-h-screen bg-white">
            <main class="container mx-auto max-w-7xl pb-12 pt-6 px-4">
                @include('layouts.header')
                <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
                    @yield('content')
                    @include('layouts.footer')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinetjs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@^3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
