<div class="grid lg:grid-cols-2 gap-12 items-center">
    <div>
        <span
            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100 mb-4">Профессиональная
            психологическая помощь</span>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Ваше психическое здоровье — наш приоритет</h1>
        <p class="text-xl text-gray-600 mb-8">Получите профессиональную поддержку от сертифицированных психологов.
            Онлайн и офлайн консультации, индивидуальный подход к каждому клиенту.</p>
        <div class="flex flex-col sm:flex-row gap-4">
            <!-- Другая карта -->
            <div data-slot="card"
                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-10 px-6 text-base bg-custom-color hover:bg-custom-color-darker"
                x-data="{ showModal: false }" @click="showModal = true">
                Подобрать психолога
                <!-- Модальное окно -->
                <div x-show="showModal"
                    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000;">
                    <div x-show="showModal" @click.away="showModal = false"
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px; width: 300px;">
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <!-- Логотип слева -->
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <div
                                    style="width: 40px; height: 40px; background: linear-gradient(to bottom right, #738297, #d9dee6); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <span style="color: white; font-weight: 600;">P</span>
                                </div>
                                <span style="font-size: 18px; font-weight: 600; color: #333;">PSYHAB</span>
                            </div>
                        </div>

<div class="space-y-4 text-center text-gray-700 overflow-hidden break-words">
    <p>Выберете удобный для вас </br>мессенджер для подбора </br>психолога</p>
    @include('layouts.social_networks')
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative">
        <img src="{{ asset('images/home/home_page_image.png') }}" alt="Психологическая консультация"
            class="rounded-2xl shadow-2xl w-full">
    </div>
</div>
