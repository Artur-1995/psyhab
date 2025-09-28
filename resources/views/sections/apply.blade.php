<div data-slot="card" class="flex flex-col gap-6 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 border-0 text-white">
        <div data-slot="card-content" class="[&:last-child]:pb-6 p-12 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-16 h-16 mx-auto mb-6 text-white">
                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
            </svg>
            <h2 class="text-3xl font-bold mb-4">Готовы начать путь к лучшему самочувствию?</h2>
            <p class="text-xl mb-8 opacity-90">Запишитесь на первую консультацию уже сегодня</p>
            <div x-data="{ showModal: false }">
                <!-- Кнопка для открытия модала -->
                <button @click="showModal = true" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-gray-100 text-gray-900 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-100 dark:hover:bg-gray-600 h-10 px-6 text-base">Записаться сейчас</button>

                <div x-show="showModal"
                style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000;">
                <div x-show="showModal" @click.away="showModal = false"
                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px; width: 300px;">
                    <div
                        style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                        <!-- Логотип слева -->
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div
                                style="width: 40px; height: 40px; background: linear-gradient(to bottom right, #007BFF, #6610f2); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <span style="color: white; font-weight: 600;">П</span>
                            </div>
                            <span style="font-size: 18px; font-weight: 600; color: #333;">Психаб</span>
                        </div>
                    </div>

                        <!-- Формочка внутри модала -->
                        <form id="form_record_self">
                        <input type="hidden" name="for" value="self">
                        <div style="margin-bottom: 20px;">
                            <label for="phone"
                                style="display: block; color: #666; font-weight: 600; margin-bottom: 10px;">Ваш номер
                                телефона</label>
                            <input type="tel" id="phone2" name="phone"
                                style="width: 100%; border: 1px solid #ccc; border-radius: 5px; padding: 10px; color: black;"
                                required>
                        </div>
                        <button type="submit"
                            style="display: inline-flex; align-items: center; justify-content: center; gap: 8px; white-space: nowrap; border-radius: 10px; font-weight: 500; transition: all 0.2s; pointer-events: auto; opacity: 1; outline: none; box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1); text-decoration: none; color: white; height: 40px; padding: 0 20px; font-size: 16px; background-color: #007BFF; border: none; cursor: pointer;">Отправить
                            заявку</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Обработчик отправки формы "Пара"
    document.getElementById('form_record_self').addEventListener('submit', async function (event) {
        event.preventDefault();
        try {
            const formData = new FormData(this);
            const response = await fetch('/submit-form', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
            });
            if (response.ok) {
                const result = await response.json();
                alert(result.message);
                this.reset(); // Очистка полей формы

                // Получаем ближайший родительский элемент с x-data
                const alpineParent = this.closest('div[x-data]');
                // Используем Alpine.js API для доступа к переменной showModal
                Alpine.$data(alpineParent).showModal = false;
            } else {
                alert('Ошибка отправки формы.');
            }
        } catch (error) {
            alert('Произошла непредвиденная ошибка.');
        }
    });

    // Маска номера телефона
    document.querySelectorAll('input[type="tel"]').forEach(function (input) {
        Inputmask({
            mask: '+7 (999) 999-99-99',
            placeholder: ' ',
            clearIncomplete: true,
            clearMaskOnLostFocus: true,
        }).mask(input);
    });
});
</script>
