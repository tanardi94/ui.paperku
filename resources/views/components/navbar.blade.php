<nav class="sticky top-0 z-50 bg-[#f6f6f6]/95 dark:bg-[#161615]/95 backdrop-blur-md border-b border-[#ececec] dark:border-[#3E3E3A]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-[104px] flex items-center justify-between">
        <div class="w-[72px] h-[72px] rounded-full bg-[#343434] text-white text-[19px] font-semibold leading-none flex items-center justify-center">LOGO</div>

        <div class="hidden md:flex items-center gap-10">
            @php $active = request()->is('/') || request()->is(''); $link = 'text-2xl leading-none font-semibold underline underline-offset-8 hover:text-[#ff7613] transition-colors'; @endphp
            <a href="/" class="{{ $link }} {{ $active ? 'text-[#ff7613]' : 'text-[#535353] dark:text-[#A1A09A]' }}">Home</a>
            @php $active = request()->is('services*'); @endphp
            <a href="/services" class="{{ $link }} {{ $active ? 'text-[#ff7613]' : 'text-[#535353] dark:text-[#A1A09A]' }}">Services</a>
            @php $active = request()->is('products*'); @endphp
            <a href="/products" class="{{ $link }} {{ $active ? 'text-[#ff7613]' : 'text-[#535353] dark:text-[#A1A09A]' }}">Products</a>
            <a href="#contact" class="{{ $link }} text-[#535353] dark:text-[#A1A09A]">Get in Touch</a>
        </div>

        <button class="md:hidden text-[#1b1b18] dark:text-[#EDEDEC]" aria-label="Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
</nav>
