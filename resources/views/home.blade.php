@extends('main')
@section('title', 'Главная | Психаб - психологическая помощь')
@section('content')
    <section class="container mx-auto px-4 py-16">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span
                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 mb-4">Профессиональная
                    психологическая помощь</span>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Ваше психическое здоровье — наш приоритет</h1>
                <p class="text-xl text-gray-600 mb-8">Получите профессиональную поддержку от сертифицированных психологов.
                    Онлайн и офлайн консультации, индивидуальный подход к каждому клиенту.</p>
                <div class="flex flex-col sm:flex-row gap-4">

                    {{-- @include('components.modal') --}}
                    <!-- <a href="#" @click="showModal = true" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-10 px-6 text-base bg-blue-600 hover:bg-blue-700">Записаться на консультацию</a> -->
                    <!-- <a href="#" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-10 px-6 text-base">Узнать больше</a> -->
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1754294437684-7898b3701ac7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0aGVyYXB5JTIwcHN5Y2hvbG9neSUyMHBlYWNlZnVzfGVufDF8fHx8MTc1Njg0MTU3OXww&ixlib=rb-4.1.0&q=80&w=1080"
                    alt="Психологическая консультация" class="rounded-2xl shadow-2xl w-full">
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 py-16">
        @include('sections.hero1')
    </section>
    <section class="container mx-auto px-4 py-16">
        @include('sections.hero')
    </section>
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Наши специалисты</h2>
                <p class="text-gray-600">Команда профессиональных психологов готова вам помочь</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div data-slot="card"
                    class="text-card-foreground flex flex-col gap-6 rounded-xl bg-white border-0 shadow-lg">
                    <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <span class="text-white text-2xl font-semibold">А</span>
                        </div>
                        <h3 class="text-xl font-semibold text-center mb-2">Анна Петрова</h3>
                        <p class="text-blue-600 text-center mb-2">Семейная терапия</p>
                        <p class="text-gray-600 text-center text-sm mb-3">12 лет опыта</p>
                        <div class="flex items-center justify-center space-x-1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star w-4 h-4 text-yellow-400 fill-current">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg><span class="text-sm font-medium">4.9</span></div>
                    </div>
                </div>
                <div data-slot="card"
                    class="text-card-foreground flex flex-col gap-6 rounded-xl bg-white border-0 shadow-lg">
                    <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <span class="text-white text-2xl font-semibold">М</span>
                        </div>
                        <h3 class="text-xl font-semibold text-center mb-2">Михаил Иванов</h3>
                        <p class="text-blue-600 text-center mb-2">Когнитивно-поведенческая терапия</p>
                        <p class="text-gray-600 text-center text-sm mb-3">8 лет опыта</p>
                        <div class="flex items-center justify-center space-x-1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star w-4 h-4 text-yellow-400 fill-current">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg><span class="text-sm font-medium">4.8</span></div>
                    </div>
                </div>
                <div data-slot="card"
                    class="text-card-foreground flex flex-col gap-6 rounded-xl bg-white border-0 shadow-lg">
                    <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-6">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <span class="text-white text-2xl font-semibold">Е</span>
                        </div>
                        <h3 class="text-xl font-semibold text-center mb-2">Елена Сидорова</h3>
                        <p class="text-blue-600 text-center mb-2">Детская психология</p>
                        <p class="text-gray-600 text-center text-sm mb-3">15 лет опыта</p>
                        <div class="flex items-center justify-center space-x-1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-star w-4 h-4 text-yellow-400 fill-current">
                                <path
                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                </path>
                            </svg><span class="text-sm font-medium">5</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 py-16">
        @include('sections.apply')
    </section>
    </div>
@endsection('content')
