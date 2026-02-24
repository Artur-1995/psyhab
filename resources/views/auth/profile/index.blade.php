@extends('main')
@section('title', 'Личный кабинет | PSYHAB - психологическая помощь')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<!-- Вывод общих ошибок -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Вывод ошибок для конкретного поля -->
@error('firstName')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror

@error('lastName')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror

@error('email')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror

@error('phone')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror

    <div class="min-h-screen bg-gray-50 py-8">
        <div class="container mx-auto px-4 max-w-4xl">

            {{-- <!-- Профиль пользователя -->
            <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl mb-8 border-0 shadow-lg">
                <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-8">
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                        <div class="relative">
                            <div class="relative flex shrink-0 overflow-hidden rounded-full w-24 h-24">
                                <div
                                    class="flex h-full w-full items-center justify-center rounded-full dark:bg-gray-800 dark:text-gray-300 bg-gradient-to-br from-blue-500 to-purple-600 text-white text-2xl">
                                    ИИ</div>
                            </div><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-gray-100 text-gray-900 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-100 dark:hover:bg-gray-600 text-sm absolute -bottom-2 -right-2 rounded-full w-8 h-8 p-0"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-camera w-4 h-4" aria-hidden="true">
                                    <path
                                        d="M13.997 4a2 2 0 0 1 1.76 1.05l.486.9A2 2 0 0 0 18.003 7H20a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1.997a2 2 0 0 0 1.759-1.048l.489-.904A2 2 0 0 1 10.004 4z">
                                    </path>
                                    <circle cx="12" cy="13" r="3"></circle>
                                </svg></button>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                <div>
                                    <h1 class="text-2xl font-bold text-gray-900">Иван Иванов</h1>
                                    <p class="text-gray-600">ivan.ivanov@example.com</p>
                                    <div class="flex items-center gap-2 mt-2"><span
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100">Активный
                                            пациент</span><span
                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-gray-300 text-gray-900 dark:border-gray-600 dark:text-gray-100">Премиум</span>
                                    </div>
                                </div><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-9 px-4 py-2 text-sm bg-myCustomColor hover:bg-myCustomColor-darkened"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-square-pen w-4 h-4 mr-2"
                                        aria-hidden="true">
                                        <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path
                                            d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z">
                                        </path>
                                    </svg>Редактировать профиль</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Навигация вкладок -->
            <div class="flex flex-col gap-2 space-y-6">
                <div id="profile-nav"
                    class="h-9 items-center justify-center rounded-lg bg-gray-100 p-1 text-gray-500 dark:bg-gray-800 dark:text-gray-400 grid w-full grid-cols-2">
                    <button id="personalButton"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 py-1 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50
                        hover:bg-gray-50 dark:hover:bg-gray-700
                        active-state">Профиль
            </button>
            <button id="articlesButton"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 py-1 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50
                        hover:bg-gray-50 dark:hover:bg-gray-700">Статьи
            </button>
                    {{-- <button id="recordsButton"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 py-1 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-gray-50 dark:hover:bg-gray-700">Записи
                    </button>
                    <button
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 py-1 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-gray-50 dark:hover:bg-gray-700">Медкарта
                    </button>
                    <button
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 py-1 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-gray-50 dark:hover:bg-gray-700">Настройки
                    </button> --}}
                </div>
                <div id="formsContainer">

                </div>
            </div>

        </div>
    </div>
    <style>
        .active-state {
            background-color: white;
            color: black;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            font-weight: bold;
            /* Любые другие отличия оформления */
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Найдем блок с кнопками
            const buttonContainer = document.querySelector('#profile-nav');

            // Найдем все кнопки внутри этого блока
            const buttons = buttonContainer.querySelectorAll('button');

            buttons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Чтобы предотвратить стандартный переход страницы

                    // Сначала убираем активный класс у всех кнопок
                    buttons.forEach(btn => btn.classList.remove('active-state'));

                    // Затем добавляем активный класс текущей кнопке
                    this.classList.add('active-state');
                });
            });
        });

        $(document).ready(function() {

            // Сразу грузим форму авторизации при загрузке страницы
            loadForm('/profile/personal');

            $('#personalButton').on('click', function(e) {
                e.preventDefault();
                loadForm('/profile/personal');
            });

            $('#recordsButton').on('click', function(e) {
                e.preventDefault();
                loadForm('/profile/upcoming-entries');
            });

            $('#articlesButton').on('click', function(e) {
                e.preventDefault();
                loadForm('/profile/articles');
            });

            function loadForm(url) {
                $.ajax({
                    url: url,
                    success: function(data) {
                        $('#formsContainer').html(data);
                    },
                    error: function(error) {
                        console.error("Ошибка загрузки формы:", error);
                    }
                });
            };
        });
    </script>
@endsection('content')
