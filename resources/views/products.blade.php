@extends('layouts.app')

@section('content')
<section class="relative bg-gradient-to-br from-[#1a1a1a] via-[#2a2a2a] to-[#3a3a3a] min-h-[520px] lg:min-h-[640px] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col justify-center min-h-[520px] lg:min-h-[640px]">
        <div class="max-w-2xl">
            <h1 class="text-5xl sm:text-6xl lg:text-[96px] leading-[0.9] tracking-[-0.03em] font-extrabold text-[#f6f6f6]">
                Latest<br>technology<br>&amp; best matrials
            </h1>
            <a href="#products" class="inline-flex items-center gap-2 mt-8 bg-[#ff6705] hover:bg-[#e55c04] text-white text-lg font-semibold px-8 py-3 rounded-full transition-colors">
                More Info
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7v10"/></svg>
            </a>
        </div>
    </div>
    <img src="/images/homepage/materials-printer-large.png" alt="Printer" class="absolute right-0 bottom-0 w-[55%] lg:w-[60%] object-contain object-bottom pointer-events-none" loading="eager">
</section>

<section id="products" class="bg-[#f6f6f6] dark:bg-[#0a0a0a] py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <a href="/products#highres" class="group flex items-center justify-between bg-white rounded-[26px] px-6 py-5 hover:shadow-md transition-shadow">
                <span class="text-sm lg:text-base font-semibold uppercase text-[#343434]">HIGHRES OUTDOOR</span>
                <svg class="w-5 h-5 text-[#343434] group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="/products#eco" class="group flex items-center justify-between bg-white rounded-[26px] px-6 py-5 hover:shadow-md transition-shadow">
                <span class="text-sm lg:text-base font-semibold uppercase text-[#343434]">ECO SOLVENT</span>
                <svg class="w-5 h-5 text-[#343434] group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="/products#dtf" class="group flex items-center justify-between bg-white rounded-[26px] px-6 py-5 hover:shadow-md transition-shadow">
                <span class="text-sm lg:text-base font-semibold uppercase text-[#ff6705]">DTF UV</span>
                <svg class="w-5 h-5 text-[#ff6705] group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<section class="bg-[#f6f6f6] dark:bg-[#0a0a0a] py-10 lg:py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
            <div class="bg-gradient-to-br from-[#ff6705] to-[#ff8b21] rounded-[44px] aspect-square max-w-[380px] flex items-center justify-center">
                <p class="text-4xl lg:text-[56px] font-bold uppercase leading-[1] text-white tracking-[0.05em]">PROMO!</p>
            </div>
            <div class="flex flex-col justify-center">
                <h2 class="text-4xl lg:text-[56px] font-extrabold leading-[0.92] tracking-[-0.03em] text-[#343434] dark:text-[#EDEDEC] mb-4">
                    DTF UV
                </h2>
                <p class="text-xl lg:text-2xl text-[#545454] dark:text-[#A1A09A] leading-relaxed max-w-xl">
                    Lorem ipsum, lorem ipsum, lorem ipsum
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#f6f6f6] dark:bg-[#0a0a0a] py-10 lg:py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-[#e3e3e0] rounded-[44px] aspect-video max-w-[500px] flex items-center justify-center">
            <p class="text-3xl lg:text-[48px] font-bold uppercase text-white/50">VIDEO</p>
        </div>
    </div>
</section>

<section class="bg-[#f6f6f6] dark:bg-[#0a0a0a] py-16 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-4xl lg:text-[56px] font-extrabold leading-[0.92] tracking-[-0.033em] text-[#424242] dark:text-[#EDEDEC]">
                Latest portfolio
            </h2>
            <button class="w-16 h-16 rounded-full bg-[#ff6705] flex items-center justify-center hover:bg-[#e55c04] transition-colors flex-shrink-0">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </button>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <img src="/images/homepage/product-1.png" alt="Portfolio" class="w-full h-40 md:h-56 object-cover rounded-xl">
            <img src="/images/homepage/product-2.png" alt="Portfolio" class="w-full h-40 md:h-56 object-cover rounded-xl">
            <img src="/images/homepage/product-3.png" alt="Portfolio" class="w-full h-40 md:h-56 object-cover rounded-xl">
            <img src="/images/homepage/product-4.png" alt="Portfolio" class="w-full h-40 md:h-56 object-cover rounded-xl">
            <img src="/images/homepage/merchandises.png" alt="Portfolio" class="w-full h-40 md:h-56 object-cover rounded-xl">
            <img src="/images/homepage/technology-magazine.png" alt="Portfolio" class="w-full h-40 md:h-56 object-cover rounded-xl">
        </div>

        <div class="flex items-center justify-center gap-3 mt-8">
            <span class="w-3 h-3 rounded-full bg-[#d6d6d6]"></span>
            <span class="w-3 h-3 rounded-full bg-[#d6d6d6]"></span>
            <span class="w-3 h-3 rounded-full bg-[#ff6705]"></span>
            <span class="w-3 h-3 rounded-full bg-[#d6d6d6]"></span>
            <span class="w-3 h-3 rounded-full bg-[#d6d6d6]"></span>
        </div>
    </div>
</section>

@endsection
