<footer class="bg-white border-t shadow-md">
    <div class="container mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-8">
        <div class="space-y-4 text-center">
            <h3 class="font-semibold text-lg mb-2">Контакты</h3>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-phone inline-block mr-2 align-middle">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                </svg> +7 (495) 123-45-67</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-mail inline-block mr-2 align-middle">
                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                    <path d="M22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                </svg> info@psycholog.ru</p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-map-pin inline-block mr-2 align-middle">
                    <path d="M8 2v4"></path>
                    <path d="M16 2v4"></path>
                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                    <path d="M3 10h18"></path>
                </svg> Москва, ул. Тверская, д. 1</p>
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
                                    субъектов, зарегистрированных на нашем сервисе.
                                    </br>
                                    1.2. Использование нашего сайта означает согласие пользователя с условиями настоящей
                                    Политики конфиденциальности.
                                    </br>
                                    2. Какие персональные данные мы собираем?
                                    Мы обрабатываем следующие категории персональных данных наших клиентов:
                                    </br>
                                    Имя и фамилия;
                                    Контактный телефон и адрес электронной почты;
                                    Информация о заказанных услугах и предпочтениях клиента;
                                    Данные банковской карты (при оплате услуг);
                                    IP-адрес устройства пользователя (для технической поддержки).
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
                                    одностороннем порядке. Актуальная версия документа доступна по ссылке: указать
                                    ссылку на страницу с политикой конфиденциальности на вашем сайте.
                                    </br>
                                    7. Контакты
                                    По любым вопросам относительно обработки ваших персональных данных обращайтесь по
                                    следующим контактам:
                                    </br>
                                    Электронная почта: info@название_сайта.ru</br>
                                    Телефон горячей линии: +7 (XXX) XXX XX XX
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
            <div class="flex space-x-4 justify-center">
                <a href="https://wa.me/+79001234567" target="_blank" rel="noreferrer noopener"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-9 w-9 p-0">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                        class="h-5 w-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                        </path>
                    </svg>
                </a>
                <a href="https://t.me/@yourusername" target="_blank" rel="noreferrer noopener"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-9 w-9 p-0">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512"
                        class="h-5 w-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm121.8 169.9l-40.7 191.8c-3 13.6-11.1 16.9-22.4 10.5l-62-45.7-29.9 28.8c-3.3 3.3-6.1 6.1-12.5 6.1l4.4-63.1 114.9-103.8c5-4.4-1.1-6.9-7.7-2.5l-142 89.4-61.2-19.1c-13.3-4.2-13.6-13.3 2.8-19.7l239.1-92.2c11.1-4 20.8 2.7 17.2 19.5z">
                        </path>
                    </svg>
                </a>
                <a href="https://vk.com/yourpage" target="_blank" rel="noreferrer noopener"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-9 w-9 p-0">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                        class="h-5 w-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="py-4 text-center text-xs text-gray-500">© 2025 Психолог Онлайн. Все права защищены.</div>
</footer>
