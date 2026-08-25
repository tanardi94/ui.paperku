@extends('layouts.app')

@section('content')
<section class="bg-[#f6f6f6] dark:bg-[#0a0a0a] pt-10 lg:pt-14 pb-6 overflow-visible">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center gap-10">
        <div class="relative z-20 lg:w-5/12">
            <h1 class="text-5xl sm:text-6xl lg:text-[96px] leading-[0.9] tracking-[-0.03em] font-extrabold text-[#343434] dark:text-[#EDEDEC]">
                Service<br>Details
            </h1>
        </div>

        <div class="relative lg:w-7/12 flex justify-center lg:justify-end">
            <div class="absolute w-[320px] h-[320px] lg:w-[500px] lg:h-[500px] rounded-full bg-gradient-to-br from-[#ff6705] to-[#f6942e] -z-10 top-1/2 -translate-y-1/2"></div>
            <div class="grid grid-cols-2 gap-3 p-4">
                <img src="/images/homepage/service-tshirt.png" alt="T-shirt" class="rounded-xl w-full h-28 lg:h-40 object-cover shadow-lg">
                <img src="/images/homepage/service-brochure.png" alt="Brochure" class="rounded-xl w-full h-28 lg:h-40 object-cover shadow-lg">
                <img src="/images/homepage/service-roll-banner.png" alt="Roll banner" class="rounded-xl w-full h-28 lg:h-40 object-cover shadow-lg">
                <img src="/images/homepage/service-marketing.png" alt="Marketing" class="rounded-xl w-full h-28 lg:h-40 object-cover shadow-lg">
            </div>
        </div>
    </div>
</section>

<section class="bg-[#f6f6f6] dark:bg-[#0a0a0a] py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <a href="/services#marketing" class="group flex items-center justify-between bg-white rounded-[26px] px-6 py-5 hover:shadow-md transition-shadow">
                <span class="text-sm lg:text-base font-semibold uppercase text-[#343434]">MARKETING MATERIALS</span>
                <svg class="w-5 h-5 text-[#343434] group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="/services#signs" class="group flex items-center justify-between bg-white rounded-[26px] px-6 py-5 hover:shadow-md transition-shadow">
                <span class="text-sm lg:text-base font-semibold uppercase text-[#343434]">SIGNS &amp; POSTERS</span>
                <svg class="w-5 h-5 text-[#343434] group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="/services#neonbox" class="group flex items-center justify-between bg-white rounded-[26px] px-6 py-5 hover:shadow-md transition-shadow">
                <span class="text-sm lg:text-base font-semibold uppercase text-[#ff6705]">NEON BOX</span>
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
                    NEON BOX
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

<a href="https://wa.me/628100668977" target="_blank" class="fixed bottom-6 right-6 z-50">
    <div class="relative">
        <img src="/images/homepage/whatsapp-icon.png" alt="WhatsApp" class="w-16 h-16">
        <span class="absolute -top-1 -right-1 bg-red-600 text-white text-xs font-bold w-5 h-5 rounded-full flex items-center justify-center">1</span>
    </div>
</a>

<footer id="contact" class="bg-[#f6f6f6] dark:bg-[#161615] border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start mb-10">
            <div>
                <h4 class="text-xl font-semibold text-[#343434] dark:text-[#EDEDEC] mb-4">Get in Touch</h4>
                <div class="text-sm text-[#545454] dark:text-[#A1A09A] space-y-1">
                    <p>Lorem Ipsum</p>
                    <p>support@example.com</p>
                    <p class="font-semibold mt-2">+ 6281 - 0066 - 8977</p>
                </div>
            </div>
            <div>
                <h4 class="text-xl font-semibold text-[#343434] dark:text-[#EDEDEC] mb-4">Social Media</h4>
                <div class="flex items-center gap-4">
                    <img src="/images/homepage/instagram-icon.png" alt="Instagram" class="w-8 h-8">
                    <img src="/images/homepage/youtube-icon.png" alt="YouTube" class="w-8 h-8">
                    <img src="/images/homepage/whatsapp-icon.png" alt="WhatsApp" class="w-8 h-8">
                </div>
            </div>
        </div>

        <div class="pt-6 border-t border-[#e3e3e0] dark:border-[#3E3E3A] flex flex-col lg:flex-row items-center justify-between gap-4">
            <p class="text-sm text-[#545454] dark:text-[#A1A09A]">
                Copyright @ 2025 <span class="font-semibold">Paperku</span>. All rights reserved
            </p>
            <img src="/images/homepage/payment-methods.png" alt="Payment methods" class="h-6 object-contain">
        </div>
    </div>
</footer>
@endsection
