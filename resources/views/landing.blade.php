@extends('layouts.app')

@section('content')
{{-- Section 1: Hero --}}
<section class="py-16 lg:py-24 min-h-[500px] lg:min-h-[600px] flex items-center bg-gradient-to-br from-gray-50 to-gray-100 dark:from-[#161615] dark:to-[#0a0a0a]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight text-[#1b1b18] dark:text-[#EDEDEC] mb-6">
            The Leader in Quality<br>Custom Print
        </h1>
        <p class="text-lg lg:text-xl text-[#706f6c] dark:text-[#A1A09A] leading-relaxed mb-8 max-w-2xl mx-auto">
            Turn your ideas into premium products that leave a lasting impression
        </p>
        <a href="#services" class="inline-block px-8 py-3 bg-[#1b1b18] dark:bg-white text-white dark:text-[#1b1b18] rounded-sm hover:bg-black dark:hover:bg-gray-200 transition-colors font-medium">
            View Our Services
        </a>
    </div>
</section>

{{-- Section 2: Services Grid --}}
<section id="services" class="py-16 lg:py-24 bg-white dark:bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl lg:text-5xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">
                Our Services
            </h2>
            <p class="text-lg text-[#706f6c] dark:text-[#A1A09A]">
                Professional printing solutions for all your needs
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <x-service-card title="Marketing Materials" href="#" image="/screenshots/images/1.png" />
            <x-service-card title="Signs & Posters" href="#" image="/screenshots/images/2.png" />
            <x-service-card title="Clothings & Bags" href="#" image="/screenshots/images/3.png" />
            <x-service-card title="Merchandises" href="#" image="/screenshots/images/4.png" />
            <x-service-card title="Fuji Film Photos Print" href="#" image="/screenshots/images/5.png" />
            <x-service-card title="Labels & Stickers" href="#" image="/screenshots/images/6.png" />
            <x-service-card title="Neon Box" href="#" image="/screenshots/images/7.png" />
            <x-service-card title="Wallpapers Custom" href="#" image="/screenshots/images/8.png" />
        </div>
        
        <div class="text-center">
            <a href="#" class="inline-block px-8 py-3 bg-[#1b1b18] dark:bg-white text-white dark:text-[#1b1b18] rounded-sm hover:bg-black dark:hover:bg-gray-200 transition-colors font-medium">
                See All Services
            </a>
        </div>
    </div>
</section>

{{-- Section 3: Technology/Client Logos --}}
<section class="py-16 lg:py-24 bg-gray-50 dark:bg-[#161615]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-xs uppercase tracking-wider text-[#706f6c] dark:text-[#A1A09A] mb-4">
                POWERED BY THE NEWEST PRINTING TECHNOLOGY IN SURABAYA
            </p>
            <h2 class="text-4xl lg:text-5xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">
                Discover our newest printing technology
            </h2>
        </div>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <x-client-logo name="BCA" src="/screenshots/images/9.png" />
            <x-client-logo name="Pizza" src="/screenshots/images/10.png" />
            <x-client-logo name="Mandiri" src="/screenshots/images/11.png" />
            <x-client-logo name="TOYOTA" src="/screenshots/images/12.png" />
        </div>
    </div>
</section>

{{-- Section 4: Stats --}}
<section class="py-16 lg:py-24 bg-white dark:bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-xs uppercase tracking-wider text-[#706f6c] dark:text-[#A1A09A]">
                PERFECTION IN PRINTING
            </p>
        </div>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <x-stat-item number="1000+" label="Project Finished" />
            <x-stat-item number="99%" label="Satisfied Clients" />
            <x-stat-item number="15+" label="Years Experience" />
            <x-stat-item number="4" label="Opened Location" />
        </div>
    </div>
</section>

{{-- Section 5: Materials/Quality --}}
<section class="py-16 lg:py-24 bg-gray-50 dark:bg-[#161615]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="aspect-square bg-gray-200 dark:bg-[#1a1a1a] rounded-lg overflow-hidden">
                    <img src="/screenshots/images/13.png" alt="Material Quality" class="w-full h-full object-cover">
                </div>
            </div>
            
            <div class="order-1 lg:order-2">
                <h2 class="text-4xl lg:text-5xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-6">
                    Best materials, for the best result
                </h2>
                <p class="text-lg text-[#706f6c] dark:text-[#A1A09A] leading-relaxed mb-8">
                    We use only the finest materials to ensure every print delivers superior quality, rich colors, and a flawless finish.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="inline-block px-8 py-3 bg-[#1b1b18] dark:bg-white text-white dark:text-[#1b1b18] rounded-sm hover:bg-black dark:hover:bg-gray-200 transition-colors font-medium text-center">
                        Discover Now!
                    </a>
                    <a href="#contact" class="inline-block px-6 py-2 border border-[#1b1b18] dark:border-white text-[#1b1b18] dark:text-white rounded-sm hover:bg-[#1b1b18] hover:text-white dark:hover:bg-white dark:hover:text-[#1b1b18] transition-colors text-center flex items-center justify-center">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
