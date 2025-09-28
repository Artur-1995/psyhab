<!-- Основной HTML-код страницы -->
<div>
    <!-- Основная кнопка -->
    <button id="openModalBtn"
        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-10 px-6 text-base bg-blue-600 hover:bg-blue-700">Показать
        форму</button>

    <!-- Модальное окно -->
    <div x-data="{ showModal: false }" id="modalComponent">
        <div x-show="showModal" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">

            <div x-show="showModal" @click.away="showModal = false"
                class="bg-white rounded-lg p-6 w-96 relative">
                <div class="flex items-center justify-between mb-4">
                    <!-- Логотип слева -->
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-semibold">П</span>
                        </div>
                        <span class="text-xl font-semibold text-gray-900">Психаб</span>
                    </div>
                </div>

                <!-- Формочка внутри модала -->
                <form id="form_record" @submit.prevent="handleSubmit">
                    <div class="mb-4">
                        <label for="for" class="block text-gray-700 font-bold mb-2">Кому требуется консультация?</label>
                        <select id="for" name="for" class="w-full border border-gray-300 rounded-md p-2">
                            <option value="me" selected>Себе</option> <!-- По умолчанию выбрано "Себе" -->
                            <option value="kid">Ребенку</option>
                            <option value="couple">Пара</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-bold mb-2">Ваш номер телефона</label>
                        <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-md p-2" required>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-10 px-6 text-base bg-blue-600 hover:bg-blue-700">
                        Отправить заявку
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('alpine:init', () => {
    console.log('Alpine.js инициализирован!');

    // Открытием модального окна с формой
    window.openModalWithAjax = async function () {
        console.log('Нажали на кнопку!');

        // Включаем модальное окно
        document.querySelector('#modalComponent').__x.showModal = true;
    };

    // Обработчик отправки формы
    window.handleSubmit = async function (event) {
        console.log('Форма отправлена!');

        const form = document.querySelector('form');
        const formData = new FormData(form);

        try {
            const response = await fetch('/submit-form', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            if (response.ok) {
                const result = await response.json();
                alert(result.message);

                // Закрываем модальное окно
                document.querySelector('#modalComponent').__x.showModal = false;
            } else {
                alert('Ошибка отправки формы.');
            }
        } catch (error) {
            console.error('Ошибка:', error);
            alert('Произошла ошибка при отправке формы.');
        }
    };

    // Назначаем обработчик события
    document.getElementById('openModalBtn').addEventListener('click', openModalWithAjax);
});
</script>
