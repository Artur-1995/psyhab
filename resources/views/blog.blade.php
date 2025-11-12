@extends('main')
@section('title', 'Главная | Психаб - психологическая помощь')
@section('content')
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Блог о психологии</h1>
                <p class="text-gray-600">Полезные статьи от наших специалистов о ментальном здоровье</p>
            </div>
            <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl mb-8 border-0 shadow-lg">
                <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-6">
                    <div class="flex flex-col md:flex-row gap-4 items-center">
                        <div class="relative flex-1">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="absolute inset-y-0 left-3 my-auto h-4 w-4 text-gray-400">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                                <select id="search" class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-10 pr-3"
                                    name="query">
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-2"><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-blue-600 text-white hover:bg-blue-700 h-8 px-3 text-sm">Все
                                статьи</button><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm">Тревожность</button><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm">Депрессия</button><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm">Медитация</button><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm">Детская
                                психология</button><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm">Семейная
                                терапия</button><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm">Самооценка</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-8">
                    <div data-slot="card"
                        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="{{ asset('/images/home1.png') }}"
                                alt="Как справиться с тревожностью в современном мире" class="w-full h-64 object-cover">
                            <div class="absolute top-4 left-4">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent text-white dark:bg-blue-700 bg-blue-600">Рекомендуемое</span>
                            </div>
                        </div>
                        <div data-slot="card-content" class="px-6 [&:last-child]:pb-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-gray-300 text-gray-900 dark:border-gray-600 dark:text-gray-100">Тревожность</span>
                                <span class="text-sm text-gray-500">•</span>
                                <span class="text-sm text-gray-500">{{ $topArticle->publication_date }}</span>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-3">{{ $topArticle->title }}</h2>
                            <p class="text-gray-600 mb-4">{{ $topArticle->description }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-4 text-sm text-gray-500">
                                    <span>Автор: {{ $topArticle->author }}</span>
                                    <div class="flex items-center gap-1">
                                        <!-- Время чтения -->
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock w-4 h-4">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg> --}}
                                        {{-- 8 мин --}}
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 text-sm text-gray-500">
                                    <div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-eye w-4 h-4">
                                            <path
                                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                            </path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        {{ $topArticle->views_count }}
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-thumbs-up w-4 h-4">
                                            <path d="M7 10v12"></path>
                                            <path
                                                d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z">
                                            </path>
                                        </svg>
                                        {{ $topArticle->likes_count }}
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-circle w-4 h-4">
                                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                        </svg>
                                        {{ $topArticle->comments_count }}
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('article.show', ['id' => $topArticle->id]) }}"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-blue-600 text-white hover:bg-blue-700 h-9 px-4 py-2 text-sm w-full mt-4">Читать
                                полностью</a>
                        </div>
                        <div class="space-y-6">
                            <h2 class="text-2xl font-bold text-gray-900">Последние статьи</h2>

                            @foreach ($articles as $article)
            <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg hover:shadow-xl transition-shadow">
                <div data-slot="card-content" class="[&:last-child]:pb-6 p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-gray-300 text-gray-900 dark:border-gray-600 dark:text-gray-100">{{ $article->category }}</span>
                        <span class="text-sm text-gray-500">•</span>
                        <span class="text-sm text-gray-500">{{ $article->publication_date }}</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 hover:text-blue-600 cursor-pointer">{{ $article->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $article->description }}</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <span>Автор: {{ $article->author }}</span>
                            <div class="flex items-center gap-1">
                                {{-- <svg ... /> --}}
                                {{-- {{ $article->reading_time }} мин --}}
                            </div>
                        </div>
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-1">
                                {{-- <svg ... /> --}}
                                {{ $article->views_count }}
                            </div>
                            <div class="flex items-center gap-1">
                                {{-- <svg ... /> --}}
                                {{ $article->likes_count }}
                            </div>
                            <div class="flex items-center gap-1">
                                {{-- <svg ... /> --}}
                                {{ $article->comments_count }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
                        </div>
                    </div>
                    <!-- Остальные статьи -->
                </div>
                <div class="space-y-6">
                    <div data-slot="card"
                        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg">
                        <div data-slot="card-header"
                            class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 pt-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                            <h4 data-slot="card-title" class="leading-none flex items-center gap-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-trending-up w-5 h-5">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>Популярные статьи</h4>
                        </div>
                        <div data-slot="card-content" class="px-6 [&amp;:last-child]:pb-6 space-y-4">
                            @foreach ($topArticles as $article)
                            <div class="flex gap-3">
                                <div
                                    class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-semibold text-sm">
                                    1</div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-sm hover:text-blue-600 cursor-pointer mb-1">{{ $article->title }}</h4>
                                    <div class="flex items-center gap-2 text-xs text-gray-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-eye w-3 h-3">
                                            <path
                                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                            </path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>{{ $article->views_count }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div data-slot="card"
                        class="text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg bg-gradient-to-br from-blue-50 to-purple-50">
                        <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-6 text-center"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-book-open w-12 h-12 text-blue-600 mx-auto mb-4">
                                <path d="M12 7v14"></path>
                                <path
                                    d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                </path>
                            </svg>
                            <h3 class="font-semibold mb-2">Подписка на рассылку</h3>
                            <p class="text-sm text-gray-600 mb-4">Получайте новые статьи на email</p><input
                                data-slot="input"
                                class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive mb-3"
                                placeholder="Ваш email"><button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-9 px-4 py-2 text-sm w-full bg-blue-600 hover:bg-blue-700">Подписаться</button>
                        </div>
                    </div>
                    <div data-slot="card"
                        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg">
                        <div data-slot="card-header"
                            class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 pt-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                            <h4 data-slot="card-title" class="leading-none">Популярные теги</h4>
                        </div>
                        <div data-slot="card-content" class="px-6 [&amp;:last-child]:pb-6">
                            <div class="flex flex-wrap gap-2"><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#стресс</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#отношения</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#самооценка</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#тревога</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#депрессия</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#медитация</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#дети</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#семья</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#работа</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#эмоции</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#сон</span><span
                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 cursor-pointer hover:bg-blue-100">#мотивация</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
