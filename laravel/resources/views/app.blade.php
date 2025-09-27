<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div id="app">
        @include('header')
        <main>
            @yield('content')
        </main>
        @include('footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>