@props(['title', 'href' => '#', 'image' => null])

<a href="{{ $href }}" class="group block p-6 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition-all duration-300">
    <div class="mb-4 flex items-center justify-center h-20">
        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}" class="w-16 h-16 object-contain">
        @else
            {{ $slot }}
        @endif
    </div>
    
    <h3 class="text-lg font-medium text-[#1b1b18] dark:text-[#EDEDEC] mb-2 text-center">
        {{ $title }}
    </h3>
    
    <div class="text-sm text-[#706f6c] dark:text-[#A1A09A] group-hover:text-[#f53003] dark:group-hover:text-[#FF4433] transition-colors flex items-center justify-center gap-1">
        <span>Learn more</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </div>
</a>
