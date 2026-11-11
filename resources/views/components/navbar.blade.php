@php
    $links = [
        ['label' => 'Home', 'href' => '/', 'active' => request()->is('/')],
        ['label' => 'Services', 'href' => '/services', 'active' => request()->is('services*')],
        ['label' => 'Products', 'href' => '/products', 'active' => request()->is('products*')],
    ];
@endphp

<header x-data="{ open: false }" class="sticky top-0 z-50 bg-[#f6f6f6]/95 dark:bg-[#161615]/95 backdrop-blur-md border-b border-[#ececec] dark:border-[#3E3E3A]">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 lg:h-20 flex items-center justify-between" aria-label="Main">
        <a href="/" class="w-12 h-12 lg:w-14 lg:h-14 rounded-full bg-[#343434] text-white text-sm font-semibold leading-none flex items-center justify-center" aria-label="Paperku home">LOGO</a>

        <div class="hidden md:flex items-center gap-8 lg:gap-10">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}"
                   @if ($link['active']) aria-current="page" @endif
                   class="text-base lg:text-lg font-semibold py-1 border-b-2 transition-colors {{ $link['active'] ? 'text-[#ff7613] border-[#ff7613]' : 'text-[#535353] dark:text-[#A1A09A] border-transparent hover:text-[#ff7613]' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="#contact" class="px-5 py-2 rounded-full bg-[#ff6705] text-white text-base lg:text-lg font-semibold hover:bg-[#e85d04] transition-colors">Get in Touch</a>
        </div>

        <button type="button" class="md:hidden p-2 -mr-2 text-[#1b1b18] dark:text-[#EDEDEC]" aria-label="Toggle menu" :aria-expanded="open" aria-controls="mobile-menu" @click="open = !open">
            <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6l12 12M18 6L6 18"/></svg>
        </button>
    </nav>

    <div id="mobile-menu" x-show="open" x-cloak x-transition.opacity @click.outside="open = false" class="md:hidden border-t border-[#ececec] dark:border-[#3E3E3A] bg-[#f6f6f6] dark:bg-[#161615]">
        <div class="px-4 py-4 flex flex-col gap-1">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}" @click="open = false"
                   @if ($link['active']) aria-current="page" @endif
                   class="py-3 text-lg font-semibold {{ $link['active'] ? 'text-[#ff7613]' : 'text-[#535353] dark:text-[#A1A09A]' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="#contact" @click="open = false" class="mt-2 text-center px-5 py-3 rounded-full bg-[#ff6705] text-white text-lg font-semibold">Get in Touch</a>
        </div>
    </div>
</header>
