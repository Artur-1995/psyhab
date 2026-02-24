<footer class="bg-white border-t shadow-md">
    <div class="container mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-8">
        <div class="space-y-4 text-center">
            <h3 class="font-semibold text-lg mb-2">Контакты</h3>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-phone inline-block mr-2 align-middle">
                    <path
                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384" />
                </svg> +7 925 007 7666</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-mail inline-block mr-2 align-middle">
                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                    <path d="M22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                </svg> info@psyhab.ru</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-map-pin inline-block mr-2 align-middle">
                    <path d="M8 2v4"></path>
                    <path d="M16 2v4"></path>
                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                    <path d="M3 10h18"></path>
                </svg> 109390 г. Москва, Юных Ленинцев 25</p>
        </div>
        {{-- <div class="space-y-4 text-center">
            <h3 class="font-semibold text-lg mb-2">Навигация</h3>
            <ul class="list-none p-0 m-0">
                <li><a href="/" class="hover:text-blue-600 transition-colors block">Главная</a></li>
                <li><a href="/psychologists" class="hover:text-blue-600 transition-colors block">Психологи</a></li>
                <li><a href="/blog" class="hover:text-blue-600 transition-colors block">Блог</a></li>
                <li><a href="/about-us" class="hover:text-blue-600 transition-colors block">О нас</a></li>
            </ul>
        </div> --}}
        <div class="space-y-4 text-center">
            <h3 class="font-semibold text-lg mb-2">Поддержка</h3>
            <ul class="list-none p-0 m-0">
                {{-- <li><a href="/faq" class="hover:text-blue-600 transition-colors block">FAQ</a></li> --}}
                {{-- <li><a href="/support" class="hover:text-blue-600 transition-colors block">Техподдержка</a></li> --}}
                {{-- <li><a href="/privacy-policy" class="hover:text-blue-600 transition-colors block">Политика конфиденциальности</a></li> --}}

                <!-- Футер с кнопкой, открывающей модальное окно -->
                <li>
                    <a href="#" onclick="openPrivacyPolicy()"
                        class="hover:text-blue-600 transition-colors block">Политика конфиденциальности</a>
                </li>

                <!-- Модальное окно для отображения политики конфиденциальности -->
                <div id="privacy-modal" class="hidden">
                    <!-- Затемняющий фон -->
                    <div class="modal-backdrop"></div>
                    <!-- Светлое модальное окно -->
                    <div class="modal-container">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Политика конфиденциальности</h3>
                        <hr class="my-4" />
                        <div class="modal-content">
                            <p class="mt-4 text-left text-sm text-gray-700 break-words leading-normal">
                                Настоящая Политика конфиденциальности регулирует порядок обработки персональных
                                данных пользователей сайта название вашего сайта, включая сбор, хранение,
                                использование и защиту персональной информации, предоставляемой пользователями при
                                регистрации и оформлении заявок на услуги психологического консультирования
                                </br>
                                </br>
                                1. Общие положения</br>
                                1.1. Настоящий документ определяет принципы и правила обработки персональных данных
                                субъектов, оставивших заявку на нашем сервисе.
                                </br>
                                1.2. Использование нашего сайта означает согласие пользователя с условиями настоящей
                                Политики конфиденциальности.
                                </br>
                                2. Какие персональные данные мы собираем?
                                Мы обрабатываем следующие категории персональных данных наших клиентов:
                                </br>
                                Имя и фамилия;
                                Контактный телефон и адрес электронной почты;
                                {{-- Информация о заказанных услугах и предпочтениях клиента;
                                    Данные банковской карты (при оплате услуг);
                                    IP-адрес устройства пользователя (для технической поддержки). --}}
                                </br>
                                3. Как мы используем ваши личные данные?
                                Собранные нами персональные данные используются исключительно для предоставления
                                услуг психологической помощи и улучшения качества обслуживания клиентов. Конкретнее:
                                </br>
                                Для оформления заказа на услугу психологической консультации;
                                Чтобы обеспечить обратную связь с клиентом и отвечать на запросы;
                                Для отправки уведомлений о статусе вашей заявки и уведомлениях о запланированных
                                консультациях;
                                Для анализа поведения пользователей на сайте и повышения удобства интерфейса;
                                По запросу государственных органов, правоохранительных структур и иных компетентных
                                органов в случаях, предусмотренных законом.
                                </br>
                                4. Принципы защиты ваших данных
                                Для обеспечения сохранности и конфиденциальности персональных данных мы применяем
                                современные технологии шифрования и организационные меры защиты:
                                </br>
                                Используем защищённые протоколы передачи данных (HTTPS);
                                Регулярно обновляем программное обеспечение и системы защиты от несанкционированного
                                доступа;
                                Ограничиваем доступ сотрудников к персональным данным и проводим регулярное обучение
                                персонала вопросам информационной безопасности.
                                </br>
                                5. Ваши права как субъекта персональных данных
                                Вы имеете право:
                                </br>
                                Получать информацию о составе и способах обработки своих персональных данных;
                                Требовать исправления некорректных сведений;
                                Отказываться от обработки своих данных в любое время;
                                Запрашивать удаление своих данных при отсутствии оснований для дальнейшего хранения.
                                </br>
                                6. Изменение Политики конфиденциальности
                                Политика конфиденциальности может быть изменена или дополнена администрацией сайта в
                                одностороннем порядке.
                                </br>
                                7. Контакты
                                По любым вопросам относительно обработки ваших персональных данных обращайтесь по
                                следующим контактам:
                                </br>
                                Электронная почта: info@psyhab.ru</br>
                                Телефон горячей линии: +7 (925) 007 7666
                                <!-- Ваш полный текст политики конфиденциальности -->
                            </p>
                        </div>
                        <button type="button" onclick="closePrivacyPolicy()"
                            class="w-full mt-4 inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Закрыть
                        </button>
                    </div>
                </div>
                <!-- Скрипт для управления модальным окном -->
                <script>
                    // Открываем модальное окно
                    function openPrivacyPolicy() {
                        document.getElementById("privacy-modal").classList.add("show-modal");
                        document.body.classList.add("no-scroll"); // Запрет прокрутки основного окна
                    }

                    // Закрываем модальное окно
                    function closePrivacyPolicy() {
                        document.getElementById("privacy-modal").classList.remove("show-modal");
                        document.body.classList.remove("no-scroll"); // Восстанавливаем прокрутку основного окна
                    }
                </script>


            </ul>
        </div>
        <div class="space-y-4 text-center">
            <h3 class="font-semibold text-lg mb-2">Социальные сети</h3>
            @include('layouts.social_networks')
        </div>
    </div>
    <div class="py-4 text-center text-xs text-gray-500">© 2025 Психолог Онлайн. Все права защищены.</div>
</footer>
