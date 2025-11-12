<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_styles.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchEl = document.querySelector("#search");
            console.log("Поиск элемента:", searchEl);

            if (!searchEl) {
                console.error("Элемент поиска не найден!");
                return;
            }

            $(searchEl).select2({
                placeholder: "Поиск статей...",
                allowClear: true, // Позволяет очищать поле
                tags: true, // Разрешить свободный ввод текста
                ajax: {
                    url: function(params) {
                        return "/blog/suggestions/" + encodeURIComponent(params
                            .term); // Добавляем фразу в URL
                    },
                    dataType: 'json',
                    delay: 250, // Задержка перед отправкой запроса (в мс)
                    processResults: function(data) {
                        console.log("Предложения получены:", data);
                        return {
                            results: data.map(item => ({
                                id: item.value, // Уникальный идентификатор
                                text: item.label, // Видимый текст
                                url: item.url // Адрес статьи
                            }))
                        };
                    },
                    cache: true // Кэшировать результаты для ускорения последующих запросов
                },
                escapeMarkup: function(markup) {
                    return markup;
                }, // Для поддержки HTML-тегов
                templateResult: formatItem, // Форматирование отображения элемента
                // templateSelection: formatItem // Форматирование выбранного элемента
            });

            // Функция для форматирования элементов
            function formatItem(item) {
                if (item.loading) return item.text;

                // Оборачиваем элемент в ссылку
                return `
                <a href="/blog/${item.id}-${item.text}" target="_blank" class="select2-result-link">
                    ${item.text}
                </a>
            `;
            }
            // Обработчик клика на элемент выпадающего списка
            $(searchEl).on('select2:select', function(e) {
                const selectedItem = e.params.data;
                window.location.href = '/blog/' + selectedItem.id + '-' + selectedItem.text; // Перенаправление на страницу статьи
            });
            // Мониторим изменения в поле поиска
            searchEl.addEventListener("change", function() {
                console.log("Новый текст в поле поиска:", this.value);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@^3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
