import "./bootstrap";
import Alpine from "alpinejs";
import Inputmask from "inputmask";

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('touchstart', function(){}, true);

// Выносим debugMode в глобальную область
let debugMode = false;

// Функция для получения CSRF токена (тоже в глобальной области)
function getCsrfToken() {
    const metaTag = document.querySelector('meta[name="csrf-token"]');
    return metaTag ? metaTag.getAttribute('content') : '';
}

// Функция для закрытия баннера (крестик) - в глобальной области
window.closeCookieBanner = function() {
    const banner = document.getElementById("cookie-banner");
    if (!banner) return;

    // Скрываем баннер
    banner.classList.add("hidden");

    // Получаем CSRF токен
    const csrfToken = getCsrfToken();

    // Отправляем запрос
    fetch("/cookies-close", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
        },
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        if (debugMode) {
            console.log("Close response:", data);
        }
    })
    .catch(error => {
        if (debugMode) {
            console.error("Ошибка при закрытии:", error);
        } else {
            console.error("Произошла ошибка при обработке запроса");
        }
    });
};

// Функция для принятия cookies (кнопка Принять) - в глобальной области
window.acceptCookies = function() {
    const banner = document.getElementById("cookie-banner");
    if (!banner) return;

    // Скрываем баннер
    banner.classList.add("hidden");

    // Получаем CSRF токен
    const csrfToken = getCsrfToken();

    // Отправляем запрос
    fetch("/cookies-accept", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
        },
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        if (debugMode) {
            console.log("Accept response:", data);
        }
    })
    .catch(error => {
        if (debugMode) {
            console.error("Ошибка при принятии:", error);
        } else {
            console.error("Произошла ошибка при обработке запроса");
        }
    });
};

// Функция для открытия политики конфиденциальности - в глобальной области
window.openPrivacyPolicy = function() {
    window.open('/privacy-policy', '_blank');
};

// Инициализация при загрузке DOM
document.addEventListener("DOMContentLoaded", function () {
    // Безопасное получение значения debug-mode
    const debugMeta = document.querySelector('meta[name="debug-mode"]');

    if (debugMeta) {
        // Преобразуем значение в boolean
        debugMode = debugMeta.getAttribute('content') === 'true';
    }

    // Здесь можно добавить код, который должен выполняться при загрузке
    if (debugMode) {
        console.log("Debug mode is enabled");
    }
});



// document.addEventListener("DOMContentLoaded", function () {
//     const searchEl = document.querySelector("#search");
//     console.log("Поиск элемента:", searchEl);

//     if (!searchEl) {
//         return;
//     }

//     $(searchEl).select2({
//         placeholder: "Поиск статей...",
//         allowClear: true, // Позволяет очищать поле
//         tags: true, // Разрешить свободный ввод текста
//         ajax: {
//             url: function (params) {
//                 return "/blog/suggestions/" + encodeURIComponent(params.term); // Добавляем фразу в URL
//             },
//             dataType: "json",
//             delay: 250, // Задержка перед отправкой запроса (в мс)
//             processResults: function (data) {
//                 console.log("Предложения получены:", data);
//                 return {
//                     results: data.map((item) => ({
//                         id: item.value, // Уникальный идентификатор
//                         text: item.label, // Видимый текст
//                         url: item.url, // Адрес статьи
//                     })),
//                 };
//             },
//             cache: true, // Кэшировать результаты для ускорения последующих запросов
//         },
//         escapeMarkup: function (markup) {
//             return markup;
//         }, // Для поддержки HTML-тегов
//         templateResult: formatItem, // Форматирование отображения элемента
//         // templateSelection: formatItem // Форматирование выбранного элемента
//     });

//     // Функция для форматирования элементов
//     function formatItem(item) {
//         if (item.loading) return item.text;

//         // Оборачиваем элемент в ссылку
//         return `
//                 <a href="/blog/${item.id}-${item.text}" target="_blank" class="select2-result-link">
//                     ${item.text}
//                 </a>
//             `;
//     }
//     // Обработчик клика на элемент выпадающего списка
//     $(searchEl).on("select2:select", function (e) {
//         const selectedItem = e.params.data;
//         window.location.href =
//             "/blog/" + selectedItem.id + "-" + selectedItem.text; // Перенаправление на страницу статьи
//     });
//     // Мониторим изменения в поле поиска
//     searchEl.addEventListener("change", function () {
//         console.log("Новый текст в поле поиска:", this.value);
//     });
// });






//     if (typeof window !== 'undefined') {
//    if ('serviceWorker' in navigator) {
//   window.addEventListener('load', function () {
//     console.log(navigator.serviceWorker);
//     navigator.serviceWorker.register('/js/serviceWorker.js').then(function (registration) {
//       console.log('Service Worker зарегистрирован:', registration.scope);
//     })["catch"](function (error) {
//       console.error('Ошибка регистрации Service Worker:', error);
//     });
//   });
// }
// }

