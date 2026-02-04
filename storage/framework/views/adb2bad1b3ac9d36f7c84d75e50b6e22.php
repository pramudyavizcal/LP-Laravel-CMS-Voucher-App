<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['faq']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['faq']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="bg-white border border-gray-200 rounded-lg shadow-sm mb-4" x-data="{ open: false }" data-aos="fade-up">
    <button @click="open = !open"
        class="w-full text-left px-6 py-4 flex justify-between items-center focus:outline-none">
        <span class="font-semibold text-gray-800"><?php echo e($faq->question); ?></span>
        <svg class="h-5 w-5 text-gray-500 transform transition-transform duration-200" :class="open ? 'rotate-180' : ''"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        class="px-6 pb-4 text-gray-600 text-sm leading-relaxed border-t border-gray-100">
        <?php echo e($faq->answer); ?>

    </div>
</div><?php /**PATH C:\laragon\www\Laravel-LP-premium-voucher\resources\views/components/faq-item.blade.php ENDPATH**/ ?>