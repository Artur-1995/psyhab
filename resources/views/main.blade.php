<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="debug-mode" content="{{ config('app.debug') ? 'true' : 'false' }}">
    <meta name="discription" content="Более 10 индивидуальных психологов по определенным запросам. Отзывы, характеристики, опыт работы. Тел. +7 (925) 007-76-66">
    <title>@yield('title')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/custom_styles.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" async></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" async></script>
    <script src="{{ mix('js/app.js') }}" async></script>
    <link rel="manifest" href="/manifest.json">
</head>

<body>
    <div id="root">
        <div class="min-h-screen bg-white">
            <main class="container mx-auto max-w-7xl pb-12 pt-6 px-4">
                @include('layouts.header')
                <div class="min-h-screen bg-gradient-to-b from-customGray to-white">
                    @yield('content')
                   @if(!$showCookieBanner ?? false)
                        @include('components.cookie_banner')
                    @endif

                    @include('layouts.footer')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@^3.x.x/dist/cdn.min.js"></script>

</body>

</html>
