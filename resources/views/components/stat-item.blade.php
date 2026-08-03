@props(['number', 'label'])

<div class="text-center">
    <div class="text-3xl lg:text-4xl font-semibold text-[#343434] dark:text-[#EDEDEC] mb-1 leading-none">
        {{ $number }}
    </div>
    <div class="text-base lg:text-lg text-[#545454] dark:text-[#A1A09A] leading-none">
        {{ $label }}
    </div>
</div>
