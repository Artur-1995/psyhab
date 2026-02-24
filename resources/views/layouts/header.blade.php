<header class="border-b bg-white/80 backdrop-blur-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div style="display: flex; align-items: center; gap: 10px;">
                                <div
                                    style="width: 40px; height: 40px; background: linear-gradient(to bottom right, #738297, #d9dee6); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <span style="color: white; font-weight: 600;">P</span>
                                </div>
                                <span style="font-size: 18px; font-weight: 600; color: #333;">PSYHAB</span>
                            </div>
        <nav class="hidden md:flex items-center space-x-8">
            {{-- <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 transition-colors">Главная</a> --}}
            {{-- <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Психологи</a> --}}
            {{-- <a href="{{ route('blog.index') }}" class="text-gray-600 hover:text-blue-600 transition-colors">Блог</a> --}}
            {{-- <a href="#" class="text-gray-600 hover:text-blue-600 transition-colors">Контакты</a> --}}
        </nav>
        <div class="flex items-center space-x-4">
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-transparent hover:bg-gray-100 dark:hover:bg-gray-800 h-9 w-9 p-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell h-5 w-5">
                    <path d="M10.268 21a2 2 0 0 0 3.464 0"></path>
                    <path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path>
                </svg>
            </button>
            <div class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full">
                <a href="{{ route('login') }}" class="block h-full w-full">
                    <div class="flex h-full w-full items-center justify-center rounded-full bg-gray-100 text-gray-600 dark:bg-gray-800 dark:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user h-4 w-4">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>
