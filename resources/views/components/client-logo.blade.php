@props(['name', 'src' => null])

<div class="flex items-center justify-center p-8 grayscale hover:grayscale-0 transition-all duration-300 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg">
    @if($src)
        <img src="{{ $src }}" alt="{{ $name }}" class="h-16 w-auto object-contain">
    @else
        <div class="text-xl font-semibold text-gray-400 dark:text-gray-600">{{ $name }}</div>
    @endif
</div>
