@extends('main')
@section('title', 'Главная | PSYHAB - психологическая помощь')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<!-- Вывод общих ошибок -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="container mx-auto px-4 py-16">
    @include('sections.hero0')
</section>
<section class="container mx-auto px-4 py-16">
    @include('sections.hero1')
</section>
<section class="container mx-auto px-4 py-16">
    @include('sections.hero')
</section>
<section class="from-blue-50 py-16">
    @include('sections.hero2')
</section>
<section class="container mx-auto px-4 py-16">
    @include('sections.apply')
</section>
<section class="from-blue-50 py-16">
    @include('sections.start_psychotherapy')
</section>
<section class="container mx-auto px-4 py-16">
    @include('sections.tariff_plan')
</section>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Универсальная функция обработки формы
    async function handleFormSubmit(form, endpointUrl) {
        event.preventDefault();
        try {
            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            const response = await fetch(endpointUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
            });

            if (response.ok) {
                const result = await response.json();
                alert(result.message);
                form.reset(); // Очистка полей формы

                // Закрытие модального окна
                const alpineParent = form.closest('div[x-data]');
                Alpine.$data(alpineParent).showModal = false;
            } else {
                alert('Ошибка отправки формы.');
            }
        } catch (error) {
            alert('Произошла непредвиденная ошибка.');
        }
    }

    // Функция для установки масок телефонов
    function applyPhoneInputMask() {
        document.querySelectorAll('input[type="tel"]').forEach(input => {
            Inputmask({
                mask: '+7 (999) 999-99-99',
                placeholder: ' ',
                clearIncomplete: true,
                clearMaskOnLostFocus: true,
            }).mask(input);
        });
    }

    // Регистрация обработчиков форм
    ['#form_record_me', '#form_record_child', '#form_record_couple', '#form_record_start_psychotherapy']
        .forEach(selector => {
            document.querySelector(selector)?.addEventListener('submit', e =>
                handleFormSubmit(e.target, '/submit-form'));
        });

    // Кнопки тарифов
    document.querySelectorAll('.tariff-button').forEach(button => {
        button.addEventListener('click', async function(event) {
            event.preventDefault();

            // Удаляем класс active-state у всех кнопок
            document.querySelectorAll('.tariff-button').forEach(btn => btn.classList.remove('active-state'));
            this.classList.add('active-state');

            // Загрузка соответствующей формы тарифа
            const tariffType = this.dataset.tariffType;
            const formsContainerTariff = document.getElementById('formsContainer_tariff');

            try {
                const response = await fetch(`/tariff-info/${tariffType}`);
                if (!response.ok) throw new Error(`HTTP error ${response.status}`);

                formsContainerTariff.innerHTML = await response.text();
                applyPhoneInputMask();

                // Присоединяем обработчик отправки формы
                const formRecordTariff = document.getElementById('form_record_tariff');
                formRecordTariff?.addEventListener('submit', e => handleFormSubmit(e.target, '/submit-form'));
            } catch (err) {
                console.error(err);
            }
        });
    });

    // Автоматический клик по кнопке "Консультация" после загрузки страницы
    document.querySelector('[data-tariff-type=consultation]').dispatchEvent(new Event('click', {'bubbles': true}));
});
</script>

@endsection('content')
