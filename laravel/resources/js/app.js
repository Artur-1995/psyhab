import './bootstrap';
import Alpine from 'alpinejs';
import Inputmask from 'inputmask';

window.Alpine = Alpine;
Alpine.start();
// const component = window.Alpine.find('#modalComponent');

// Обработчик отправки формы
document.getElementById('form_record').addEventListener('submit', async function (event) {
    event.preventDefault(); // Предотвращаем стандартную отправку формы

    try {
    // Этап 1: Сбор данных формы
    const formData = new FormData(this);
    // console.log('Данные формы:', Object.fromEntries(formData.entries()));
    // Этап 2: Отправка данных на сервер
    const response = await fetch('/form-record', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    });

    // Этап 3: Анализ полученного ответа
    if (response.ok) {
        const result = await response.json();
        // console.log('Ответ сервера:', result);

        // Этап 4: Обновление интерфейса после успешного ответа
        alert('Заявка успешно отправлена!');
        this.reset(); // Очистка полей формы

    } else {
        const errorResponse = await response.text(); // Получаем текстовую версию ответа
        // console.error('Ошибка отправки:', errorResponse);
        alert('Возникла ошибка при отправке заявки.');
    }
} catch (error) {
    // console.error('Общая ошибка:', error.message);
    alert('Произошла непредвиденная ошибка.');
}
});

// АльпайнJS хук для закрытия модала
document.addEventListener('close-modal', () => {
    Alpine.$data.showModal = false;
});

// Маска номера телефона
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('input[type="tel"]').forEach(function (input) {
        Inputmask({
            mask: '+7 (999) 999-99-99',
            placeholder: ' ',
            clearIncomplete: true,
            clearMaskOnLostFocus: true,
        }).mask(input);
    });
});
