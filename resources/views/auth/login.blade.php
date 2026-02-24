@extends('main')
@section('title', 'Авторизация | PSYHAB - психологическая помощь')
@section('content')
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
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 flex items-center justify-center p-4">
        <div class="w-full max-w-4xl grid lg:grid-cols-2 gap-8 items-center">
            <div class="hidden lg:block">
                <div class="relative">
                    <img
                    {{-- src="https://images.unsplash.com/photo-1687180948607-9ba1dd045e10?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZWRpdGF0aW9uJTIwd2VsbG5lc3MlMjBjYWxtfGVufDF8fHx8MTc1Njg0MTU4MXww&ixlib=rb-4.1.0&q=80&w=1080" --}}
                        alt="Meditation and wellness" class="rounded-2xl shadow-2xl w-full h-[600px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-2xl">
                    </div>
                </div>
            </div>
            <div>
                <div data-slot="card"
                    class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-2xl">
                    <div data-slot="card-header"
                        class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 pt-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 space-y-1 pb-6">
                        <div class="flex items-center justify-center mb-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-xl">P</span>
                            </div>
                        </div>
                        <h4 data-slot="card-title" class="text-2xl text-center">Добро пожаловать</h4>
                        <p class="text-center text-gray-600">Войдите в свой аккаунт или создайте новый</p>
                    </div>
                    <div data-slot="card-content" class="px-6 [&:last-child]:pb-6">

                        <div
                            class="h-9 items-center justify-center rounded-lg bg-gray-100 p-1 text-gray-500 dark:bg-gray-800 dark:text-gray-400 grid w-full grid-cols-2">
                            <button id="loginButton"
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 py-1 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 active-state hover:bg-gray-50 dark:hover:bg-gray-700">Вход</button>
                            <button id="registrationButton"
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 py-1 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 hover:bg-gray-50 dark:hover:bg-gray-700">Регистрация</button>
                        </div>
                        <div id="formsContainer">
                        </div>
                    </div>
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
            var buttons = document.querySelectorAll('button');

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
            loadForm('/auth-form');

            $('#loginButton').on('click', function(e) {
                e.preventDefault();
                loadForm('/auth-form');
            });

            $('#registrationButton').on('click', function(e) {
                e.preventDefault();
                loadForm('/register-form');
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
    <script>
        function togglePasswordVisibility() {
            let passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
@endsection('content')
