<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Одностраничный лендинг</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .site-container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="site-container">
        <!-- Включаем хедер -->
        @include('layouts.header')

        <main class="py-10">
            <section class="max-w-screen-md mx-auto text-center">
                <h1 class="text-4xl font-bold text-gray-900">Добро пожаловать на сайт Психаб!</h1>
                <p class="my-6 text-gray-600 leading-relaxed">Профессиональная помощь психолога онлайн.</p>
                <button id="contact-button" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Связаться с нами</button>
            </section>
            <!-- Hero Section -->
            <!-- Hero Section -->
            <section class="container mx-auto px-4 py-16">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Левый столбец с текстом -->
                    <div>
                        <Badge variant="secondary" class="mb-4">
                            Профессиональная психологическая помощь
                        </Badge>
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                            Ваше психическое здоровье — наш приоритет
                        </h1>
                        <p class="text-xl text-gray-600 mb-8">
                            Получите профессиональную поддержку от сертифицированных психологов.<br />
                            Онлайн и офлайн консультации, индивидуальный подход к каждому клиенту.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <Button size="lg" class="bg-blue-600 hover:bg-blue-700">
                                Записаться на консультацию
                            </Button>
                            <Button variant="outline" size="lg">
                                Узнать больше
                            </Button>
                        </div>
                    </div>

                    <!-- Правый столбец с картинкой -->
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1754294437684-7898b3701ac7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0aGVyYXB5JTIwcHN5Y2hvbG9neSUyMHBlYWNlZnVsfGVufDF8fHx8MTc1Njg0MTU3OXww&ixlib=rb-4.1.0&q=80&w=1080"
                            alt="Психологическая консультация"
                            class="rounded-2xl shadow-2xl w-full" />
                    </div>
                </div>
            </section>
        </main>
        <!-- Подключаем шаблон формы -->
        @include('application.form')
        <!-- Включаем футер -->
        @include('layouts.footer')
    </div>



    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        document.getElementById('contact-button').addEventListener('click', function() {
            document.getElementById('contact-modal').classList.remove('hidden');
        });

        document.getElementById('close-modal').addEventListener('click', function() {
            document.getElementById('contact-modal').classList.add('hidden');
        });
    </script>
</body>

</html>