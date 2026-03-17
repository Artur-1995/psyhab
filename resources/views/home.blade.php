@extends('main')
{{-- @section('title', 'Главная | PSYHAB - психологическая помощь') --}}
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
    @include('sections.tariff_plan_light')
</section>
<section class="container mx-auto px-4 py-16">
    @include('sections.tariff_plan_medium')
</section>
<section class="container mx-auto px-4 py-16">
    @include('sections.tariff_plan_heavy')
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

        // Определяем тип тарифа и контейнер для формы
        let tariffType = null;
        let formsContainerTariff = null;

        if (this.dataset.tariffLightType) {
            tariffType = this.dataset.tariffLightType;
            formsContainerTariff = document.getElementById('forms_container_tariff_light');
        } else if (this.dataset.tariffMediumType) {
            tariffType = this.dataset.tariffMediumType;
            formsContainerTariff = document.getElementById('forms_container_tariff_medium');
        } else if (this.dataset.tariffHeavyType) {
            tariffType = this.dataset.tariffHeavyType;
            formsContainerTariff = document.getElementById('forms_container_tariff_heavy');
        }

        // Проверяем, что tariffType и контейнер существуют
        if (!tariffType || !formsContainerTariff) {
            console.error('Не удалось определить тип тарифа или найти контейнер');
            return;
        }

        try {
            const response = await fetch(`/tariff-info/${tariffType}`);

            if (!response.ok) {
                throw new Error(`HTTP error ${response.status}`);
            }

            const html = await response.text();
            formsContainerTariff.innerHTML = html;

            // Применяем маску для телефона после загрузки формы
            if (typeof applyPhoneInputMask === 'function') {
                applyPhoneInputMask();
            }

            // Присоединяем обработчик отправки формы
            const formRecordTariff = document.getElementById('form_record_tariff');
            if (formRecordTariff) {
                // Удаляем старые обработчики, чтобы не накапливались
                formRecordTariff.removeEventListener('submit', handleFormSubmit);
                formRecordTariff.addEventListener('submit', (e) => {
                    e.preventDefault();
                    if (typeof handleFormSubmit === 'function') {
                        handleFormSubmit(e.target, '/submit-form');
                    }
                });
            }

        } catch (err) {
            console.error('Ошибка при загрузке формы:', err);
        }
    });
});

    // Автоматический клик по кнопке "Консультация" после загрузки страницы
    document.querySelector('[data-tariff-light-type=consultation-light]').dispatchEvent(new Event('click', {'bubbles': true}));

    // Автоматический клик по кнопке "Консультация" после загрузки страницы
    document.querySelector('[data-tariff-medium-type=consultation-medium]').dispatchEvent(new Event('click', {'bubbles': true}));

    // Автоматический клик по кнопке "Консультация" после загрузки страницы
    document.querySelector('[data-tariff-heavy-type=consultation-heavy]').dispatchEvent(new Event('click', {'bubbles': true}));
});
</script>

@endsection('content')
