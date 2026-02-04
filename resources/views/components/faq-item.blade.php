@props(['faq'])

<div class="bg-white border border-gray-200 rounded-lg shadow-sm mb-4" x-data="{ open: false }" data-aos="fade-up">
    <button @click="open = !open"
        class="w-full text-left px-6 py-4 flex justify-between items-center focus:outline-none">
        <span class="font-semibold text-gray-800">{{ $faq->question }}</span>
        <svg class="h-5 w-5 text-gray-500 transform transition-transform duration-200" :class="open ? 'rotate-180' : ''"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        class="px-6 pb-4 text-gray-600 text-sm leading-relaxed border-t border-gray-100">
        {{ $faq->answer }}
    </div>
</div>