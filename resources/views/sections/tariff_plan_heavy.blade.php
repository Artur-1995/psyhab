{{-- <div class="text-center mb-12">
    <h2 class="text-3xl font-bold text-gray-900 mb-4">Выберите свой тариф</h2>
    <p class="text-gray-600 max-w-2xl mx-auto">Гибкие тарифные планы для различных потребностей. Все консультации
        проводятся опытными специалистами</p>
</div> --}}
<div class="flex justify-center mb-8">
    <div class="inline-flex bg-gray-100 rounded-lg p-1"><button
            class="tariff-button inline-flex items-center justify-center whitespace-nowrap rounded-md px-6 py-3 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 active-state hover:bg-gray-50 dark:hover:bg-gray-700" data-tariff-heavy-type="consultation-heavy">Консультация</button>
            <button
            class="tariff-button inline-flex items-center justify-center whitespace-nowrap rounded-md px-6 py-3 text-sm font-medium ring-offset-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 hover:bg-gray-50 dark:hover:bg-gray-700"
            data-tariff-heavy-type="weekly_subscription_tariff-heavy">Подписка на
            неделю</button>
    </div>
</div>

<div class="max-w-3xl mx-auto px-40 mb-4">
    <div id="forms_container_tariff_heavy">
    </div>
</div>
<div class="mt-12 grid md:grid-cols-3 gap-6 max-w-4xl mx-auto py-6">
    <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg">
        <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-6 text-center">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-shield w-6 h-6 text-green-600" aria-hidden="true">
                    <path
                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                </svg>
            </div>
            <h4 class="font-semibold mb-2">Гарантия качества</h4>
            <p class="text-sm text-gray-600">Если вам не подойдёт специалист, мы предложим замену</p>
        </div>
    </div>
    <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg">
        <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-6 text-center">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-clock w-6 h-6 text-blue-600" aria-hidden="true">
                    <path d="M12 6v6l4 2"></path>
                    <circle cx="12" cy="12" r="10"></circle>
                </svg></div>
            <h4 class="font-semibold mb-2">Гибкий график</h4>
            <p class="text-sm text-gray-600">Консультации в удобное для вас время, включая выходные</p>
        </div>
    </div>
    <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg">
        <div data-slot="card-content" class="[&amp;:last-child]:pb-6 p-6 text-center">
            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-heart w-6 h-6 text-purple-600" aria-hidden="true">
                    <path
                        d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
                    </path>
                </svg>
            </div>
            <h4 class="font-semibold mb-2">Индивидуальный подход</h4>
            <p class="text-sm text-gray-600">Персональная программа работы под ваши цели и задачи</p>
        </div>
    </div>
</div>

<style>
    .active-state {
        background-color: white;
        color: black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        font-weight: bold;
        /* Любые другие отличия оформления */
    }
</style>
