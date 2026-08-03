@extends('layouts.app')

@section('content')
<section class="bg-[#f6f6f6] dark:bg-[#0a0a0a] pt-10 lg:pt-14 pb-6 overflow-visible">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-center">
        <div class="relative z-20">
            <h1 class="text-5xl sm:text-6xl lg:text-[72px] font-extrabold leading-[0.92] tracking-[-0.03em] text-[#343434] dark:text-[#EDEDEC] mb-6">
                The Leader<br>in Quality<br>Custom Print
            </h1>
            <p class="text-lg lg:text-[20px] lg:leading-[1.25] text-[#545454] dark:text-[#A1A09A] mb-8 max-w-xl">
                Turn your ideas into premium products that leave a lasting impression
            </p>
            <a href="/products" class="inline-flex items-center gap-2 px-6 py-2.5 text-[22px] leading-none font-semibold bg-[#ff6705] text-white rounded-full hover:bg-[#e85d04] transition-colors">
                Discover Now! ↗
            </a>
        </div>

        <div class="relative min-h-[400px] lg:min-h-[500px] overflow-visible">
            <div class="absolute top-10 lg:top-16 left-8 lg:left-4 w-[300px] h-[300px] lg:w-[400px] lg:h-[400px] rounded-full bg-[#ffc30f]"></div>
            <img src="/images/homepage/technology-magazine.png" alt="Magazine" class="absolute top-0 lg:-top-4 right-4 lg:right-0 w-56 lg:w-96 object-contain rotate-12 drop-shadow-2xl z-20">
            <img src="/images/homepage/materials-printer-large.png" alt="Printer" class="absolute -bottom-16 lg:-bottom-24 -right-32 lg:-right-48 w-[450px] lg:w-[650px] max-w-none object-contain z-10">
        </div>
    </div>
</section>

<section class="bg-transparent py-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-[#ff6705] to-[#ff8b21] rounded-[44px] pt-16 lg:pt-18 pb-16 lg:pb-20 px-6 lg:px-12 text-center">
            <p class="text-sm uppercase tracking-[0.25em] text-white font-semibold mb-4">LET’S GET PRINTING</p>
            <h2 class="text-4xl lg:text-[64px] font-semibold text-white mb-6 leading-[0.95]">
                Reasons to get printing<br>started with us
            </h2>
            <p class="text-base lg:text-[21px] leading-[1.2] text-white/95 max-w-4xl mx-auto mb-14">
                Our dedicated staff makes it easy for you to create a high quality custom print that will impress your clients and make you stand out from the crowd.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                <div class="px-4">
                    <div class="w-16 h-16 mx-auto mb-4 text-white">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="w-full h-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9V5a2 2 0 0 1 2-2h4M21 9V5a2 2 0 0 0-2-2h-4M3 15v4a2 2 0 0 0 2 2h4M21 15v4a2 2 0 0 1-2 2h-4M8 8h8v8H8z"/>
                        </svg>
                    </div>
                    <div class="inline-block px-4 py-1.5 rounded-full bg-[#ffd777] text-[#ff6705] text-[22px] lg:text-[26px] leading-none font-semibold mb-4">Biggest Capacity</div>
                    <p class="text-[16px] leading-[1.25] text-white/95 max-w-xs mx-auto">High capacity productions, built to handle large-volume orders with ease, so you can scale without limits.</p>
                </div>
                <div class="px-4">
                    <div class="w-16 h-16 mx-auto mb-4 text-white">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="w-full h-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 4-8 4-8-4 8-4zM4 11l8 4 8-4M4 15l8 4 8-4"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 8.5l2.5 2.5-2.5 2.5-2.5-2.5 2.5-2.5z"/>
                        </svg>
                    </div>
                    <div class="inline-block px-4 py-1.5 rounded-full bg-[#ffd777] text-[#ff6705] text-[22px] lg:text-[26px] leading-none font-semibold mb-4">Best Material</div>
                    <p class="text-[16px] leading-[1.25] text-white/95 max-w-xs mx-auto">Materials that make a difference from premium paper to specialty finishes, we use only materials that elevate your final result.</p>
                </div>
                <div class="px-4">
                    <div class="w-16 h-16 mx-auto mb-4 text-white">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="w-full h-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 9V4h12v5M6 14H4v6h16v-6h-2M6 14h12v-5H6v5zM8 18h8"/>
                        </svg>
                    </div>
                    <div class="inline-block px-4 py-1.5 rounded-full bg-[#ffd777] text-[#ff6705] text-[22px] lg:text-[26px] leading-none font-semibold mb-4">Latest Technology</div>
                    <p class="text-[16px] leading-[1.25] text-white/95 max-w-xs mx-auto">Continuously upgrade to the newest printing machine, bringing you advanced quality and performance, first in Surabaya.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-16 lg:py-20 bg-[#e8e8e8] dark:bg-[#161615]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="/services" class="group text-center">
                <div class="rounded-[26px] bg-white p-5 min-h-[280px] flex flex-col">
                    <h3 class="text-[14px] lg:text-[16px] leading-tight font-semibold uppercase text-left text-[#343434] mb-3">MARKETING MATERIALS</h3>
                    <div class="flex-1 flex items-end justify-center relative">
                        <img src="/images/homepage/business-cards-stack.png" alt="Business Cards" class="h-44 w-32 object-contain group-hover:scale-105 transition-transform relative z-10">
                        <img src="/images/homepage/service-brochure.png" alt="Brochure" class="h-44 w-32 object-contain group-hover:scale-105 transition-transform relative -ml-4 z-0">
                    </div>
                </div>
            </a>
            <a href="/services" class="group text-center">
                <div class="rounded-[26px] bg-white p-5 min-h-[280px] flex flex-col">
                    <h3 class="text-[14px] lg:text-[16px] leading-tight font-semibold uppercase text-left text-[#343434] mb-3">SIGNS &amp; POSTERS</h3>
                    <div class="flex-1 flex items-end justify-center relative">
                        <img src="/images/homepage/service-roll-banner.png" alt="Roll Banner" class="h-44 w-32 object-contain group-hover:scale-105 transition-transform relative z-10">
                        <img src="/images/homepage/signs-posters.png" alt="Poster" class="h-44 w-32 object-contain group-hover:scale-105 transition-transform relative -ml-4 z-0">
                    </div>
                </div>
            </a>
            <a href="/services" class="group text-center">
                <div class="rounded-[26px] bg-white p-5 min-h-[280px] flex flex-col">
                    <h3 class="text-[14px] lg:text-[16px] leading-tight font-semibold uppercase text-left text-[#343434] mb-3">CLOTHINGS &amp; BAGS</h3>
                    <div class="flex-1 flex items-end justify-center">
                        <img src="/images/homepage/service-tshirt.png" alt="T-Shirt" class="h-52 w-44 object-contain group-hover:scale-105 transition-transform">
                    </div>
                </div>
            </a>
            <a href="/services" class="group text-center">
                <div class="rounded-[26px] bg-white p-5 min-h-[280px] flex flex-col">
                    <h3 class="text-[14px] lg:text-[16px] leading-tight font-semibold uppercase text-left text-[#343434] mb-3">MERCHANDISES</h3>
                    <div class="flex-1 flex items-end justify-center relative">
                        <img src="/images/homepage/technology-fan-print.png" alt="Fan" class="h-44 w-32 object-contain group-hover:scale-105 transition-transform relative z-10">
                        <img src="/images/homepage/merchandises.png" alt="Bottles" class="h-44 w-32 object-contain group-hover:scale-105 transition-transform relative -ml-4 z-0">
                    </div>
                </div>
            </a>
            <a href="/services" class="group text-center">
                <div class="rounded-[26px] bg-white p-5 min-h-[280px] flex flex-col">
                    <h3 class="text-[14px] lg:text-[16px] leading-tight font-semibold uppercase text-left text-[#343434] mb-3">FUJI FILM PHOTOS PRINT</h3>
                    <div class="flex-1 flex items-end justify-center">
                        <img src="/images/homepage/fuji-film-photos-print.png" alt="Photo Print" class="h-52 w-44 object-contain group-hover:scale-105 transition-transform">
                    </div>
                </div>
            </a>
            <a href="/services" class="group text-center">
                <div class="rounded-[26px] bg-white p-5 min-h-[280px] flex flex-col">
                    <h3 class="text-[14px] lg:text-[16px] leading-tight font-semibold uppercase text-left text-[#343434] mb-3">LABELS &amp; STICKERES</h3>
                    <div class="flex-1 flex items-end justify-center">
                        <img src="/images/homepage/labels-stickers.png" alt="Sticker" class="h-52 w-44 object-contain group-hover:scale-105 transition-transform">
                    </div>
                </div>
            </a>
            <a href="/services" class="group text-center">
                <div class="rounded-[26px] bg-white p-5 min-h-[280px] flex flex-col">
                    <h3 class="text-[14px] lg:text-[16px] leading-tight font-semibold uppercase text-left text-[#343434] mb-3">NEON BOX</h3>
                    <div class="flex-1 flex items-end justify-center">
                        <img src="/images/homepage/neon-box.png" alt="Neon Box" class="h-52 w-44 object-contain group-hover:scale-105 transition-transform">
                    </div>
                </div>
            </a>
            <a href="/services" class="group text-center">
                <div class="rounded-[26px] bg-white p-5 min-h-[280px] flex flex-col">
                    <h3 class="text-[14px] lg:text-[16px] leading-tight font-semibold uppercase text-left text-[#343434] mb-3">WALLPAPERS CUSTOM</h3>
                    <div class="flex-1 flex items-end justify-center">
                        <img src="/images/homepage/wallpapers-custom.jpg" alt="Wallpaper" class="h-52 w-44 object-cover group-hover:scale-105 transition-transform rounded-md">
                    </div>
                </div>
            </a>
        </div>

        <div class="text-center mt-14">
            <a href="/services" class="inline-flex items-center gap-2 px-8 py-3 text-[20px] lg:text-[24px] leading-none font-semibold bg-[#ff6705] text-white rounded-full hover:bg-[#e85d04] transition-colors">
                See our service more ↗
            </a>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-[#0a0a0a] py-0">
    <div class="w-full bg-gradient-to-r from-black via-[#4b4b4b] to-[#8b8b8b] min-h-[410px] lg:min-h-[560px] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative h-full py-10 lg:py-12">
            <div class="max-w-xl relative z-20">
                <p class="text-sm uppercase tracking-[0.2em] text-white font-semibold mb-4">
                    POWERED BY THE NEWEST PRINTING TECHNOLOGY IN SURABAYA
                </p>
                <h2 class="text-4xl lg:text-6xl leading-[0.92] font-semibold text-white mb-8">
                    Discover our<br>newest printing<br>technology
                </h2>
                <a href="/products" class="inline-flex items-center gap-2 px-6 py-2.5 text-2xl font-semibold border-2 border-white text-white rounded-full hover:bg-white hover:text-[#343434] transition-colors">
                    Discover Now! ↗
                </a>
            </div>
            <img src="/images/homepage/materials-printer-large.png" alt="Printer" class="absolute right-0 top-1/2 -translate-y-1/2 object-contain z-10 scale-x-[-1]" style="width: 700px; height: 494px;">
        </div>
    </div>

        <div class="py-14 lg:py-16 text-center bg-white dark:bg-[#0a0a0a]">
            <p class="text-3xl uppercase tracking-[0.2em] text-[#f35b04] font-semibold mb-10">THANK YOU FOR YOUR TRUST</p>
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-10 items-center">
                <img src="/images/homepage/client-bca.png" alt="BCA" class="h-12 lg:h-16 object-contain mx-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all">
                <img src="/images/homepage/client-greenland.png" alt="Greenland" class="h-12 lg:h-16 object-contain mx-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all">
                <img src="/images/homepage/client-pizzahut.png" alt="Pizza Hut" class="h-12 lg:h-16 object-contain mx-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all">
                <img src="/images/homepage/client-mandiri.png" alt="Mandiri" class="h-12 lg:h-16 object-contain mx-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all">
                <img src="/images/homepage/client-toyota.png" alt="Toyota" class="h-12 lg:h-16 object-contain mx-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all">
            </div>
        </div>
    </div>
</section>

<section class="py-10 lg:py-12 bg-[#ffc30f] dark:bg-[#161615] min-h-screen relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-12 lg:mb-14">
            <x-stat-item number="1000+" label="Project Finished" />
            <x-stat-item number="99%" label="Satisfied Clients" />
            <x-stat-item number="15+" label="Years Experience" />
            <x-stat-item number="4" label="Opened Location" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
            <div class="order-2 lg:order-2 relative">
                <img src="/images/homepage/business-cards-stack.png" alt="Business cards stack" class="w-full object-contain drop-shadow-2xl relative z-10">
            </div>

            <div class="order-1 lg:order-1">
                <p class="text-sm uppercase tracking-[0.2em] text-[#545454] dark:text-[#A1A09A] font-semibold mb-3">
                    PERFECTION IN PRINTING
                </p>
                <h2 class="text-4xl lg:text-6xl font-semibold leading-[0.95] text-[#343434] dark:text-[#EDEDEC] mb-5">
                    Best materials, for the best result
                </h2>
                <p class="text-xl lg:text-2xl text-[#545454] dark:text-[#A1A09A] leading-relaxed mb-8 max-w-xl">
                    We use only the finest materials to ensure every print delivers superior quality, rich colors, and a flawless finish.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/products" class="inline-flex items-center justify-center px-8 py-3 text-xl font-semibold border-2 border-[#343434] text-[#343434] dark:border-white dark:text-white rounded-full hover:bg-[#343434] hover:text-white dark:hover:bg-white dark:hover:text-[#1b1b18] transition-colors">
                        Discover Now! ↗
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer floating on top -->
    <div class="absolute bottom-0 left-0 right-0 z-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-0">
            <div class="bg-white dark:bg-[#161615] rounded-t-[40px] pt-12 pb-8 px-8 lg:px-12 shadow-xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-start mb-8">
                    <div>
                        <div class="w-16 h-16 rounded-full bg-[#343434] text-white flex items-center justify-center font-bold text-lg">LOGO</div>
                    </div>

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
        </div>
    </div>
</section>
@endsection
