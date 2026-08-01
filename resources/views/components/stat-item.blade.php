@props(['number', 'label'])

<div class="text-center">
    <div class="text-4xl lg:text-5xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-2">
        {{ $number }}
    </div>
    <div class="text-sm uppercase tracking-wide text-[#706f6c] dark:text-[#A1A09A]">
        {{ $label }}
    </div>
</div>
