{{-- Card 2 --}}
<div data-slot="card"
    class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-2xl overflow-hidden">
    <div class="bg-custom-color hover:bg-custom-color-darker p-8 text-white">
        <div class="flex items-start justify-between mb-4">
            <div>
                <h3 class="text-3xl font-bold mb-2">Подписка на неделю</h3>
                <p class="opacity-90">Консультация + постоянная поддержка в течение недели</p>
            </div><span
                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent dark:bg-gray-800 dark:text-gray-100 bg-white text-blue-600 bg-gradient-to-r from-blue-600 to-purple-600 text-white"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-zap w-3 h-3 mr-1" aria-hidden="true">
                    <path
                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                    </path>
                </svg>Рекомендуем</span>
        </div>
        <div class="flex items-baseline gap-2"><span class="text-5xl font-bold">3 500</span><span
                class="text-5xl font-bold">₽</span></div>
        <p class="opacity-90 mt-2">на 7 дней</p>
    </div>
    <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-8">
        <div class="space-y-4 mb-8">
            <h4 class="font-semibold text-lg flex items-center gap-2 text-gray-900"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-circle-check-big w-5 h-5 text-green-600" aria-hidden="true">
                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                    <path d="m9 11 3 3L22 4"></path>
                </svg>Что входит в тариф:</h4>
            <ul class="space-y-3">
                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"
                        aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path>
                    </svg><span class="text-gray-700">60 минут онлайн консультации</span></li>
                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"
                        aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path>
                    </svg><span class="text-gray-700">Поддержка в чате 7 дней</span></li>
                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"
                        aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path>
                    </svg><span class="text-gray-700">Ответы на вопросы между сессиями</span></li>
                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"
                        aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path>
                    </svg><span class="text-gray-700">Методические материалы</span></li>
                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-green-600 flex-shrink-0 mt-0.5"
                        aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path>
                    </svg><span class="text-gray-700">Упражнения и практики</span></li>
                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-check w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path>
                    </svg><span class="text-gray-700">Экономия 1 000 рублей</span></li>
            </ul>
        </div>
      <div class="space-y-4">
            <div x-data="{ showModal: false }">
                <button @click="showModal = true"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-10 px-6 text-base w-full bg-custom-color hover:bg-custom-color-darker"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-calendar w-5 h-5 mr-2" aria-hidden="true">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                        <path d="M3 10h18"></path>
                    </svg>Получить подписку</button>
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

                        <!-- Формочка внутри модала -->
                        <form id="form_record_tariff">
                            <input type="hidden" name="for" value="weekly_subscription_tariff">
                            <div style="margin-bottom: 20px;">
                                <label for="email"
                                    style="display: block; color: #666; font-weight: 600; margin-bottom: 10px;">Email</label>
                                <input type="email" id="email" name="email"
                                    style="width: 100%; border: 1px solid #ccc; border-radius: 5px; padding: 10px; color: black;"
                                    required>
                                <label for="phone"
                                    style="display: block; color: #666; font-weight: 600; margin-bottom: 10px;">
                                    Ваш номер телефона
                                </label>
                                <input type="tel" id="phone3" name="phone"
                                    style="width: 100%; border: 1px solid #ccc; border-radius: 5px; padding: 10px; color: black;"
                                    required>
                            </div>
                            <button type="submit"
                                style="display: inline-flex; align-items: center; justify-content: center; gap: 8px; white-space: nowrap; border-radius: 10px; font-weight: 500; transition: all 0.2s; pointer-events: auto; opacity: 1; outline: none; box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1); text-decoration: none; color: white; height: 40px; padding: 0 20px; font-size: 16px; background-color: #738297; border: none; cursor: pointer;">Отправить
                                заявку</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center gap-2 text-sm text-gray-500"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-clock w-4 h-4" aria-hidden="true">
                    <path d="M12 6v6l4 2"></path>
                    <circle cx="12" cy="12" r="10"></circle>
                </svg><span>Ответим в течение 10 минут</span></div>
        </div>
        <div class="mt-6 pt-6 border-t border-gray-200">
            <p class="text-sm text-gray-600 text-center">💳 Принимаем все виды оплаты • 🔒 Безопасная оплата •
                ↩️ Гарантия возврата</p>
        </div>
    </div>
</div>
