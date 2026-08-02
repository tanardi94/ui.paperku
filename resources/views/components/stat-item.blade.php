@props(['number', 'label'])

<div class="text-center">
    <div class="text-5xl lg:text-6xl font-semibold text-[#343434] dark:text-[#EDEDEC] mb-2 leading-none">
        {{ $number }}
    </div>
    <div class="text-3xl text-[#545454] dark:text-[#A1A09A] leading-none">
        {{ $label }}
    </div>
</div>
