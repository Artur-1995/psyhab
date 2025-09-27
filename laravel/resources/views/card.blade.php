<div class="bg-white border-0 shadow-lg rounded-xl">
    <div class="p-6">
        <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mx-auto mb-4 flex items-center justify-center">
            <span class="text-white text-2xl font-semibold">{{ substr($name, 0, 1) }}</span>
        </div>
        <h3 class="text-xl font-semibold text-center mb-2">{{ $name }}</h3>
        <p class="text-blue-600 text-center mb-2">{{ $specialty }}</p>
        <p class="text-gray-600 text-center text-sm mb-3">{{ $experience }}</p>
        <div class="flex items-center justify-center space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-yellow-400 fill-current"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
            <span class="text-sm font-medium">{{ $rating }}</span>
        </div>
    </div>
</div>