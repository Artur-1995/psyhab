<form method="POST" action="{{ route('login.auth') }}">
    @csrf
    <div class="outline-none space-y-4 mt-6">
        <div class="space-y-2">
            <label for="email"
                class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50">Email</label>
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-mail absolute left-3 top-3 h-4 w-4 text-gray-400">
                    <rect width="20" height="16" x="2" y="4" rx="2">
                    </rect>
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                </svg>
                <input type="email" name="email" id="email" placeholder="example@mail.com"
                    class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-10">
            </div>
        </div>
        <div class="space-y-2">
            <label for="password"
                class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50">Пароль</label>
            <div class="relative">
                <input type="password" name="password" id="password" placeholder="Введите пароль"
                    class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pr-10">
                <button type="button" onclick="togglePasswordVisibility()"
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 bg-transparent dark:hover:bg-gray-800 text-sm absolute right-0 top-0 h-full px-3 py-2 hover:bg-transparent">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-4 w-4 text-gray-400">
            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
            </path>
            <circle cx="12" cy="12" r="3"></circle>
        </svg>
    </button>
            </div>
        </div>
        {{-- <div class="flex justify-end">
            <a href="#"
                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-blue-600 underline-offset-4 hover:underline h-9 py-2 px-0 text-sm">Забыли
                пароль?</a>
        </div> --}}
        <button type="submit"
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-white h-9 px-4 py-2 text-sm w-full bg-myCustomColor hover:bg-myCustomColor-darkened">Войти</button>
        {{-- <div class="flex justify-center">
            <input type="checkbox" name="remember_me" id="remember_me" style="margin-top: revert;"
                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-10 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 text-blue-600 underline-offset-4 hover:underline h-2 py-2 px-0 text-sm">
                <label for="remember_me" style="margin-left: 7px;">Запомнить меня</label>
        </div> --}}


        {{-- <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div role="none" aria-orientation="horizontal"
                    class="shrink-0 bg-gray-200 dark:bg-gray-700 h-px w-full"></div>
            </div>
            <div class="relative flex justify-center text-xs uppercase">
                <span class="bg-white px-2 text-gray-500">или</span>
            </div>
        </div>
        <button
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 border border-gray-300 bg-white text-gray-900 hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-700 h-9 px-4 py-2 text-sm w-full">Войти
            через Google</button> --}}
    </div>
</form>
