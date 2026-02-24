@props(['variant', 'size', 'class' => '', 'href' => null])

<a href="{{ $href ?? '#' }}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 {{ $class }}">
    {{ $slot }}
</a>
