<div id="contact-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4">Свяжитесь с нами</h2>
        <form action="{{ route('submit') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-gray-700">Ваше имя</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="email" class="block text-gray-700">Ваш email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="phone" class="block text-gray-700">Ваш телефон</label>
                <input type="tel" name="phone" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="message" class="block text-gray-700">Ваше сообщение</label>
                <textarea name="message" id="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Отправить</button>
        </form>
        <button id="close-modal" class="mt-4 text-blue-500 hover:text-blue-600">Закрыть</button>
    </div>
</div>