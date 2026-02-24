<div class="outline-none space-y-6">
    <div class="grid gap-6">
        <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg">
            <div data-slot="card-header"
                class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 pt-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                <h4 data-slot="card-title" class="leading-none">Ближайшие записи</h4>
            </div>
            <div data-slot="card-content" class="px-6 [&amp;:last-child]:pb-6 space-y-4">
                <div class="border rounded-lg p-4 space-y-3">
                    <div class="flex items-start justify-between">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calendar w-4 h-4 text-blue-600" aria-hidden="true">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg><span class="font-medium">15 сентября 2025</span></div>
                            <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-clock w-4 h-4 text-gray-400" aria-hidden="true">
                                    <path d="M12 6v6l4 2"></path>
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg><span class="text-gray-600">14:00</span></div>
                            <p class="font-medium">Анна Петрова</p>
                            <p class="text-sm text-gray-600">Индивидуальная консультация</p>
                        </div><span
                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-myCustomColor text-white dark:bg-blue-700">Подтверждено</span>
                    </div>
                    <div class="flex gap-2"><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm">Перенести</button><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-red-600 text-white hover:bg-red-700 focus-visible:ring-red-200 h-8 px-3 text-sm">Отменить</button>
                    </div>
                </div>
                <div class="border rounded-lg p-4 space-y-3">
                    <div class="flex items-start justify-between">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calendar w-4 h-4 text-blue-600" aria-hidden="true">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                </svg><span class="font-medium">22 сентября 2025</span></div>
                            <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-clock w-4 h-4 text-gray-400" aria-hidden="true">
                                    <path d="M12 6v6l4 2"></path>
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg><span class="text-gray-600">16:30</span></div>
                            <p class="font-medium">Михаил Иванов</p>
                            <p class="text-sm text-gray-600">Онлайн консультация</p>
                        </div><span
                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-transparent bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-gray-100">Ожидает</span>
                    </div>
                    <div class="flex gap-2"><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-8 px-3 text-sm">Перенести</button><button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-red-600 text-white hover:bg-red-700 focus-visible:ring-red-200 h-8 px-3 text-sm">Отменить</button>
                    </div>
                </div>
            </div>
        </div>
        <div data-slot="card" class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border-0 shadow-lg">
            <div data-slot="card-header"
                class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 pt-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                <h4 data-slot="card-title" class="leading-none">История посещений</h4>
            </div>
            <div data-slot="card-content" class="px-6 [&amp;:last-child]:pb-6">
                <div class="space-y-3">
                    <div class="border rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-medium">Анна Петрова</p>
                                <p class="text-sm text-gray-600">Индивидуальная консультация</p>
                                <p class="text-sm text-gray-500">8 сентября 2025</p>
                            </div><span
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-gray-300 text-gray-900 dark:border-gray-600 dark:text-gray-100">Завершено</span>
                        </div>
                    </div>
                    <div class="border rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-medium">Елена Сидорова</p>
                                <p class="text-sm text-gray-600">Первичная консультация</p>
                                <p class="text-sm text-gray-500">1 сентября 2025</p>
                            </div><span
                                class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium whitespace-nowrap border-gray-300 text-gray-900 dark:border-gray-600 dark:text-gray-100">Завершено</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
