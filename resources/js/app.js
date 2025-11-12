import './bootstrap';
import Alpine from 'alpinejs';
import Inputmask from 'inputmask';

window.Alpine = Alpine;
Alpine.start();

        document.addEventListener("DOMContentLoaded", function() {
            const searchEl = document.querySelector("#search");
            console.log("Поиск элемента:", searchEl);

            if (!searchEl) {
                console.error("Элемент поиска не найден!");
                return;
            }

            $(searchEl).select2({
                placeholder: "Поиск статей...",
                allowClear: true, // Позволяет очищать поле
                tags: true, // Разрешить свободный ввод текста
                ajax: {
                    url: function(params) {
                        return "/blog/suggestions/" + encodeURIComponent(params
                            .term); // Добавляем фразу в URL
                    },
                    dataType: 'json',
                    delay: 250, // Задержка перед отправкой запроса (в мс)
                    processResults: function(data) {
                        console.log("Предложения получены:", data);
                        return {
                            results: data.map(item => ({
                                id: item.value, // Уникальный идентификатор
                                text: item.label, // Видимый текст
                                url: item.url // Адрес статьи
                            }))
                        };
                    },
                    cache: true // Кэшировать результаты для ускорения последующих запросов
                },
                escapeMarkup: function(markup) {
                    return markup;
                }, // Для поддержки HTML-тегов
                templateResult: formatItem, // Форматирование отображения элемента
                // templateSelection: formatItem // Форматирование выбранного элемента
            });

            // Функция для форматирования элементов
            function formatItem(item) {
                if (item.loading) return item.text;

                // Оборачиваем элемент в ссылку
                return `
                <a href="/blog/${item.id}-${item.text}" target="_blank" class="select2-result-link">
                    ${item.text}
                </a>
            `;
            }
            // Обработчик клика на элемент выпадающего списка
            $(searchEl).on('select2:select', function(e) {
                const selectedItem = e.params.data;
                window.location.href = '/blog/' + selectedItem.id + '-' + selectedItem.text; // Перенаправление на страницу статьи
            });
            // Мониторим изменения в поле поиска
            searchEl.addEventListener("change", function() {
                console.log("Новый текст в поле поиска:", this.value);
            });
        });
