    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Выберите формат консультации</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Мы предлагаем консультации для разных категорий</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
        <div data-slot="card"
            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg hover:shadow-xl transition-shadow cursor-pointer"
            x-data="{ showModal: false }" @click="showModal = true">
            <div data-slot="card-content" class="[&:last-child]:pb-6 p-8 text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <img src="{{ asset('images/home/me.png') }}"
            alt="Психологическая консультация для себя" class="rounded-2xl shadow-2xl w-full">
                </div>
                <h3 class="text-xl font-semibold mb-3">Себе</h3>
                <p class="text-gray-600">Индивидуальные консультации для взрослых</p>
            </div>
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

                    <!-- Формочка внутри модала -->
                    <form id="form_record_me">
                        <input type="hidden" name="for" value="me">
                        <div style="margin-bottom: 20px;">
                            <label for="phone"
                                style="display: block; color: #666; font-weight: 600; margin-bottom: 10px;">Ваш номер
                                телефона</label>
                            <input type="tel" id="phone2" name="phone"
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

        <!-- Другая карта -->
        <div data-slot="card"
            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg hover:shadow-xl transition-shadow cursor-pointer"
            x-data="{ showModal: false }" @click="showModal = true">
            <div data-slot="card-content" class="[&:last-child]:pb-6 p-8 text-center">
                <div class="w-16 h-16 bg-blue-80 rounded-full flex items-center justify-center mx-auto mb-4">
                    <img src="{{ asset('images/home/child1.png') }}"
            alt="Психологическая консультация для себя" class="rounded-2xl shadow-2xl w-full">
                </div>
                <h3 class="text-xl font-semibold mb-3">Ребенку</h3>
                <p class="text-gray-600">Консультации для детей и подростков</p>
            </div>
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

                    <!-- Формочка внутри модала -->
                    <form id="form_record_child">
                        <input type="hidden" name="for" value="kid">
                        <div style="margin-bottom: 20px;">
                            <label for="phone"
                                style="display: block; color: #666; font-weight: 600; margin-bottom: 10px;">Ваш номер
                                телефона</label>
                            <input type="tel" id="phone2" name="phone"
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

        <!-- Другая карта -->
        <div data-slot="card"
            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg hover:shadow-xl transition-shadow cursor-pointer"
            x-data="{ showModal: false }" @click="showModal = true">
            <div data-slot="card-content" class="[&:last-child]:pb-6 p-8 text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <img src="{{ asset('images/home/couple.png') }}"
            alt="Психологическая консультация для пары" class="rounded-2xl shadow-2xl w-full">
                </div>
                <h3 class="text-xl font-semibold mb-3">Пара</h3>
                <p class="text-gray-600">Консультации для пар и семейных отношений</p>
            </div>
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

                    <!-- Формочка внутри модала -->
                    <form id="form_record_couple">
                        <input type="hidden" name="for" value="couple">
                        <div style="margin-bottom: 20px;">
                            <label for="phone"
                                style="display: block; color: #666; font-weight: 600; margin-bottom: 10px;">Ваш номер
                                телефона</label>
                            <input type="tel" id="phone2" name="phone"
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
    </div>
