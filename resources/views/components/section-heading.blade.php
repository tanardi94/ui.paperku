@props(['title', 'subtitle' => null])

<div class="text-center mb-12">
    <h2 class="text-3xl lg:text-4xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">
        {{ $title }}
    </h2>
    @if($subtitle)
        <p class="text-lg text-[#706f6c] dark:text-[#A1A09A]">
            {{ $subtitle }}
        </p>
    @endif
</div>
