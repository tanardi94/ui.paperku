@extends('layouts.app')

@section('content')
<section class="bg-[#f6f6f6] dark:bg-[#0a0a0a] pt-10 lg:pt-14 pb-6 overflow-x-clip">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-6 items-center">
        <div class="relative z-20">
            <h1 class="text-[2.5rem] sm:text-6xl lg:text-[80px] xl:text-[96px] font-extrabold leading-[0.95] whitespace-nowrap tracking-[-0.03em] text-[#343434] dark:text-[#EDEDEC] mb-6">
                The Leader<br>in Quality<br>Custom Print
            </h1>
            <p class="text-lg lg:text-[22px] lg:leading-[1.25] text-[#545454] dark:text-[#A1A09A] mb-8 max-w-xl">
                Turn your ideas into premium products<br class="hidden sm:block"> that leave a lasting impression
            </p>
            <a href="/products" class="inline-flex items-center gap-2 px-7 py-3 text-xl lg:text-2xl leading-none font-semibold bg-[#ff6705] text-white rounded-full hover:bg-[#e85d04] transition-colors">
                Discover Now! &#8599;
            </a>
        </div>

        <div class="relative min-h-[360px] sm:min-h-[440px] lg:min-h-[560px]">
            <div class="absolute top-10 lg:top-8 left-0 lg:-left-6 w-[260px] h-[260px] sm:w-[340px] sm:h-[340px] lg:w-[440px] lg:h-[440px] rounded-full bg-[#ffc30f]"></div>
            <img src="/images/homepage/technology-magazine.png" alt="Open magazine" class="absolute -top-2 lg:top-0 right-2 lg:right-0 w-60 sm:w-80 lg:w-[30rem] object-contain rotate-12 drop-shadow-2xl z-20">
            <img src="/images/homepage/materials-printer-large.png" alt="Large format printer" class="absolute -bottom-10 lg:-bottom-28 -right-24 lg:-right-40 w-[420px] sm:w-[520px] lg:w-[680px] max-w-none object-contain z-30">
        </div>
    </div>
</section>

<section class="relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-[#ff6705] to-[#ff8b21] rounded-[32px] lg:rounded-[44px] py-14 lg:py-20 px-6 lg:px-12 text-center">
            <p class="text-sm lg:text-base uppercase tracking-[0.25em] text-white font-bold mb-4">LET&rsquo;S GET PRINTING</p>
            <h2 class="text-4xl lg:text-[56px] font-semibold text-white mb-6 leading-[1.05]">
                Reasons to get <span class="text-[#ffd777]">printing<br class="hidden sm:block"> started</span> with us
            </h2>
            <p class="text-base lg:text-xl leading-snug text-white/95 max-w-3xl mx-auto mb-12 lg:mb-16">
                Our dedicated staff makes it easy for you to create a high quality custom print that will impress your clients and make you stand out from the crowd.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                <div class="px-4">
                    <img src="/images/homepage/reason-capacity.png" alt="" class="h-24 w-24 mx-auto mb-4 object-contain">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-[#ffd777] text-[#ff6705] text-2xl leading-none font-semibold mb-4">Biggest Capacity</div>
                    <p class="text-base leading-snug text-white/95 max-w-xs mx-auto">High capacity productions, built to handle large-volume orders with ease, so you can scale without limits.</p>
                </div>
                <div class="px-4">
                    <img src="/images/homepage/reason-material.png" alt="" class="h-24 w-24 mx-auto mb-4 object-contain">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-[#ffd777] text-[#ff6705] text-2xl leading-none font-semibold mb-4">Best Material</div>
                    <p class="text-base leading-snug text-white/95 max-w-xs mx-auto">Materials that make a difference, from premium paper to specialty finishes, we use only materials that elevate your final result.</p>
                </div>
                <div class="px-4">
                    <img src="/images/homepage/reason-technology.png" alt="" class="h-24 w-24 mx-auto mb-4 object-contain">
                    <div class="inline-block px-4 py-1.5 rounded-full bg-[#ffd777] text-[#ff6705] text-2xl leading-none font-semibold mb-4">Latest Technology</div>
                    <p class="text-base leading-snug text-white/95 max-w-xs mx-auto">Continuously upgrade to the newest printing machine, bringing you advanced quality and performance, first in Surabaya.</p>
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
                    <h3 class="text-[14px] lg:text-[16px] leading-tight font-semibold uppercase text-left text-[#343434] mb-3">LABELS &amp; STICKERS</h3>
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

<section class="bg-[#f6f6f6] dark:bg-[#0a0a0a]">
    <div class="bg-gradient-to-r from-black via-[#4b4b4b] to-[#8b8b8b] rounded-[32px] lg:rounded-[44px] relative overflow-hidden min-h-[420px] lg:min-h-[520px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative py-12 lg:py-16 min-h-[420px] lg:min-h-[520px] flex items-center">
            <div class="max-w-xl relative z-20">
                <p class="text-xs lg:text-sm uppercase tracking-[0.2em] text-white font-bold mb-4">
                    Powered by the newest printing technology in Surabaya
                </p>
                <h2 class="text-4xl lg:text-[64px] leading-[1] font-semibold text-white mb-8">
                    Discover our<br>newest printing<br>technology
                </h2>
                <a href="/products" class="inline-flex items-center gap-2 px-6 py-2.5 text-xl lg:text-2xl font-semibold border-2 border-white text-white rounded-full hover:bg-white hover:text-[#343434] transition-colors">
                    Discover Now! &#8599;
                </a>
            </div>
            <img src="/images/homepage/materials-printer-large.png" alt="Newest printing machine" class="hidden md:block absolute right-0 top-1/2 -translate-y-1/2 w-[520px] lg:w-[760px] max-w-none object-contain z-10">
        </div>
    </div>

    <div class="py-14 lg:py-20 text-center">
        <p class="text-xl lg:text-3xl uppercase tracking-[0.2em] text-[#f35b04] font-bold mb-10">THANK YOU FOR YOUR TRUST</p>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-10 items-center">
            <img src="/images/homepage/client-bca.png" alt="BCA" class="h-16 lg:h-24 object-contain mx-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all">
            <img src="/images/homepage/client-greenland.png" alt="Greenland" class="h-16 lg:h-24 object-contain mx-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all">
            <img src="/images/homepage/client-pizzahut.png" alt="Pizza Hut" class="h-16 lg:h-24 object-contain mx-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all">
            <img src="/images/homepage/client-mandiri.png" alt="Mandiri" class="h-16 lg:h-24 object-contain mx-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all">
            <img src="/images/homepage/client-toyota.png" alt="Toyota" class="h-16 lg:h-24 object-contain mx-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition-all">
        </div>
    </div>
</section>

<section class="py-12 lg:py-16 bg-[#ffc30f] dark:bg-[#161615] overflow-x-clip">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-12 lg:mb-16">
            <x-stat-item number="1000+" label="Project Finished" />
            <x-stat-item number="99%" label="Satisfied Clients" />
            <x-stat-item number="15+" label="Years Experience" />
            <x-stat-item number="4" label="Opened Location" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
            <div class="order-2 lg:order-2">
                <img src="/images/homepage/materials-paper-stack.png" alt="Stack of premium paper" class="w-full lg:w-[115%] max-w-none object-contain drop-shadow-xl">
            </div>

            <div class="order-1 lg:order-1">
                <p class="text-xs lg:text-sm uppercase tracking-[0.2em] text-[#545454] dark:text-[#A1A09A] font-bold mb-3">
                    Perfection in printing
                </p>
                <h2 class="text-4xl sm:text-5xl lg:text-[52px] xl:text-[60px] font-extrabold leading-[1] tracking-[-0.02em] lg:whitespace-nowrap text-[#343434] dark:text-[#EDEDEC] mb-5">
                    Best materials,<br>for the best result
                </h2>
                <p class="text-lg lg:text-2xl text-[#545454] dark:text-[#A1A09A] leading-snug mb-8 max-w-xl">
                    We use only the finest materials to ensure every print delivers superior quality, rich colors, and a flawless finish.
                </p>
                <a href="/products" class="inline-flex items-center justify-center px-7 py-3 text-xl font-semibold border-2 border-[#343434] text-[#343434] dark:border-white dark:text-white rounded-full hover:bg-[#343434] hover:text-white dark:hover:bg-white dark:hover:text-[#1b1b18] transition-colors">
                    Discover Now! &#8599;
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
