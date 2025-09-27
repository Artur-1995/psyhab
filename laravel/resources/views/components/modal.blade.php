<div x-data="{ showModal: false }" id="modalComponent">
    <!-- Кнопка для открытия модала -->
    <button @click="showModal = true"
        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-10 px-6 text-base bg-blue-600 hover:bg-blue-700">Записаться
        на консультацию</button>

    <!-- Модальное окно -->
    <div x-show="showModal" style="display:none;" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">

        <div x-show="showModal" @click.away="showModal = false" class="bg-white rounded-lg p-6 w-96">
            <div class="flex items-center justify-between mb-4">
                <!-- Логотип слева -->
                <div class="flex items-center space-x-2">
                    <div
                        class="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-semibold">П</span>
                    </div>
                    <span class="text-xl font-semibold text-gray-900">Психаб</span>
                </div>
            </div>

            <!-- Формочка внутри модала -->
            <form id="form_record">
                <div class="mb-4">
                    <label for="for" class="block text-gray-700 font-bold mb-2">Кому требуется
                        консультация?</label>
                    <select id="for" name="for" class="w-full border border-gray-300 rounded-md p-2">
                        <option value="me">Себе</option>
                        <option value="kid">Ребенку</option>
                        <option value="couple">Пара</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="phone" autofocus class="block text-gray-700 font-bold mb-2">Ваш номер телефона</label>
                    <input type="tel" id="phone" name="phone"
                        class="w-full border border-gray-300 rounded-md p-2" required>
                </div>
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-10 px-6 text-base bg-blue-600 hover:bg-blue-700">
                    Отправить заявку
                </button>
            </form>
        </div>
    </div>
</div>
