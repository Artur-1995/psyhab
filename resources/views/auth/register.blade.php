@extends('main')
@section('title', 'Авторизация | PSYHAB - психологическая помощь')
@section('content')
    <div
                    class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 flex items-center justify-center p-4">
                    <div class="w-full max-w-4xl grid lg:grid-cols-2 gap-8 items-center">
                        <div class="hidden lg:block">
                            <div class="relative">
                                <img
                                {{-- src="https://images.unsplash.com/photo-1687180948607-9ba1dd045e10?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZWRpdGF0aW9uJTIwd2VsbG5lc3MlMjBjYWxtfGVufDF8fHx8MTc1Njg0MTU4MXww&ixlib=rb-4.1.0&q=80&w=1080" --}}
                                    alt="Meditation and wellness"
                                    class="rounded-2xl shadow-2xl w-full h-[600px] object-cover">
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
                                    <h4 data-slot="card-title" class="text-2xl text-center">Добро пожаловать!</h4>
                                    <p class="text-center text-gray-600">Создайте учетную запись и начните пользоваться услугами нашего психологического сервиса.</p>
                                </div>
                                <div data-slot="card-content" class="px-6 [&:last-child]:pb-6">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="outline-none space-y-4 mt-6">
                                            <div class="space-y-2">
                                                <label for="name"
                                                    class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50">Ваше имя:</label>
                                                <div class="relative">
                                                    <input type="text" name="name" id="name"
                                                        placeholder="Иван Иванов"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-10">
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <label for="email"
                                                    class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50">Email:</label>
                                                <div class="relative">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-mail absolute left-3 top-3 h-4 w-4 text-gray-400">
                                                        <rect width="20" height="16" x="2" y="4" rx="2">
                                                        </rect>
                                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                                    </svg>
                                                    <input type="email" name="email" id="email"
                                                        placeholder="example@mail.com"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-10">
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <label for="password"
                                                    class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50">Пароль:</label>
                                                <div class="relative">
                                                    <input type="password" name="password" id="password"
                                                        placeholder="Введите пароль"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pr-10">
                                                    <button type="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-transparent dark:hover:bg-gray-800 text-sm absolute right-0 top-0 h-full px-3 py-2 hover:bg-transparent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-eye h-4 w-4 text-gray-400">
                                                            <path
                                                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <label for="password_confirmation"
                                                    class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50">Подтверждение пароля:</label>
                                                <div class="relative">
                                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                                        placeholder="Подтвердите пароль"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pr-10">
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-9 px-4 py-2 text-sm w-full bg-myCustomColor hover:bg-myCustomColor-darkened">Зарегистрироваться</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <script>
        $(document).ready(function() {
            $('#loginButton').on('click', function(e) {
                e.preventDefault();
                loadForm('/authenticate');
            });

            $('#registrationButton').on('click', function(e) {
                e.preventDefault();
                loadForm('/register');
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
