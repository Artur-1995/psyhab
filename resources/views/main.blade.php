<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="debug-mode" content="{{ config('app.debug') ? 'true' : 'false' }}">

    <!-- Title (заголовок) - самый важный тег -->
    <title>@yield('title', 'Psyhab - подбор психолога по низкой цене и высокому уровню образования')</title>

    <!-- Meta Description - второй по важности -->
    <meta name="description"
          content="@yield('description', 'Psyhab - более 10 индивидуальных психологов. Отзывы, опыт работы, цены. Подберем психолога под ваш запрос. Тел. +7 (925) 007-76-66')">

    <!-- Meta Keywords (менее важен сейчас, но можно оставить) -->
    <meta name="keywords"
          content="@yield('keywords', 'психолог москва, онлайн психолог, психолог недорого, psyhab, психологическая помощь, психотерапевт, семейный психолог')">

    <!-- Robots - управление индексацией -->
    <meta name="robots" content="@yield('robots', 'index, follow')">

    <!-- Canonical URL - предотвращает дубли -->
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <!-- Open Graph (для соцсетей) -->
    <meta property="og:site_name" content="Psyhab">
    <meta property="og:title" content="@yield('og_title', 'Psyhab - подбор психолога')">
    <meta property="og:description" content="@yield('og_description', 'Подберем психолога под ваш запрос. Отзывы, рейтинги, цены.')">
    <meta property="og:image" content="@yield('og_image', asset('images/psyhab-og.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Psyhab - психологи онлайн')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Индивидуальные психологи онлайн')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/psyhab-twitter.jpg'))">

    <!-- Favicon и иконки -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="/manifest.json">

    <!-- CSS (загружаются первыми) -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/custom_styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

    <!-- Preconnect для внешних ресурсов -->
    <link rel="preconnect" href="https://code.jquery.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    <!-- JS (загружаются с defer) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Schema.org разметка для организации (JSON-LD) -->
    @yield('schema_org')

    <!-- Дополнительные meta теги -->
    @yield('meta_tags')
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
