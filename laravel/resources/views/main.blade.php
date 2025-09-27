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
            <div class="bg-gray-100 border-b p-4">
                <div class="container mx-auto max-w-7xl px-4">
                    <h2 class="text-lg font-semibold mb-4 text-center">Демонстрация дизайна сайта психологического сервиса</h2>
                    <div class="flex flex-wrap gap-2 justify-center">
                        <a href="/" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-blue-600 text-white hover:bg-blue-700 h-9 px-4 py-2 text-sm">Главная</a>
                        <a href="/auth" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-9 px-4 py-2 text-sm">Авторизация</a>
                        <!-- Остальные ссылки -->
                    </div>
                </div>
            </div>
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
