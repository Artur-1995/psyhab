<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="root">
        <div class="min-h-screen bg-white">
            <div class="bg-gray-100 border-b p-4">
                <div class="container mx-auto max-w-7xl px-4">
                    <h2 class="text-lg font-semibold mb-4 text-center">Демонстрация дизайна сайта психологического сервиса</h2>
                    <div class="flex flex-wrap gap-2 justify-center">
                        <a href="/" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-9 px-4 py-2 text-sm">Главная</a>
                        <a href="/auth" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-blue-600 text-white hover:bg-blue-700 h-9 px-4 py-2 text-sm">Авторизация</a>
                        <!-- Остальные ссылки -->
                    </div>
                </div>
            </div>
            <main class="container mx-auto max-w-7xl pb-12 pt-6 px-4">
                <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 flex items-center justify-center p-4">
                    <div class="w-full max-w-4xl grid lg:grid-cols-2 gap-8 items-center">
                        <div class="hidden lg:block">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1687180948607-9ba1dd045e10?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZWRpdGF0aW9uJTIwd2VsbG5lc3MlMjBjYWxtfGVufDF8fHx8MTc1Njg0MTU4MXww&ixlib=rb-4.1.0&q=80&w=1080" alt="Meditation and wellness" class="rounded-2xl shadow-2xl w-full h-[600px] object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-2xl"></div>
                            </div>
                        </div>
                        <div>
                            <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-2xl">
                                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 pt-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 space-y-1 pb-6">
                                    <div class="flex items-center justify-center mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                                            <span class="text-white font-bold text-xl">П</span>
                                        </div>
                                    </div>
                                    <h4 data-slot="card-title" class="text-2xl text-center">Добро пожаловать</h4>
                                    <p class="text-center text-gray-600">Войдите в свой аккаунт или создайте новый</p>
                                </div>
                                <div data-slot="card-content" class="px-6 [&:last-child]:pb-6">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="h-9 items-center justify-center rounded-lg bg-gray-100 p-1 text-gray-500 dark:bg-gray-800 dark:text-gray-400 grid w-full grid-cols-2">
                                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 py-1 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-gray-950 shadow dark:bg-gray-950 dark:text-gray-50">Вход</button>
                                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md px-3 py-1 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-gray-50 dark:hover:bg-gray-700">Регистрация</button>
                                        </div>
                                        <div class="outline-none space-y-4 mt-6">
                                            <div class="space-y-2">
                                                <label for="email" class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50">Email</label>
                                                <div class="relative">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-3 top-3 h-4 w-4 text-gray-400">
                                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                                    </svg>
                                                    <input type="email" name="email" id="email" placeholder="example@mail.com" class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-10">
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <label for="password" class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50">Пароль</label>
                                                <div class="relative">
                                                    <input type="password" name="password" id="password" placeholder="Введите пароль" class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pr-10">
                                                    <button type="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-transparent dark:hover:bg-gray-800 text-sm absolute right-0 top-0 h-full px-3 py-2 hover:bg-transparent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-4 w-4 text-gray-400">
                                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex justify-end">
                                                <a href="#" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-blue-600 underline-offset-4 hover:underline h-9 py-2 px-0 text-sm">Забыли пароль?</a>
                                            </div>
                                            <button type="submit" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-9 px-4 py-2 text-sm w-full bg-blue-600 hover:bg-blue-700">Войти</button>
                                            <div class="relative">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div role="none" aria-orientation="horizontal" class="shrink-0 bg-gray-200 dark:bg-gray-700 h-px w-full"></div>
                                                </div>
                                                <div class="relative flex justify-center text-xs uppercase">
                                                    <span class="bg-white px-2 text-gray-500">или</span>
                                                </div>
                                            </div>
                                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-9 px-4 py-2 text-sm w-full">Войти через Google</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>