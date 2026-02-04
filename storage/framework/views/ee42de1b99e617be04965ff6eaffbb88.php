<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['voucher']));

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

foreach (array_filter((['voucher']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl group relative"
    data-aos="fade-up">
    <?php if($voucher->is_best_seller): ?>
        <div
            class="absolute top-0 right-0 bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg z-10 shadow-md">
            BEST SELLER
        </div>
    <?php endif; ?>
    <?php if($voucher->is_promo): ?>
        <div class="absolute top-0 left-0 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-br-lg z-10 shadow-md">
            PROMO
        </div>
    <?php endif; ?>

    <div class="relative h-48 overflow-hidden">
        <?php if($voucher->image_path): ?>
            <img src="<?php echo e(asset('storage/' . $voucher->image_path)); ?>" alt="<?php echo e($voucher->name); ?>"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        <?php else: ?>
            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">
                <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                </svg>
            </div>
        <?php endif; ?>
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300"></div>
    </div>

    <div class="p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-2 truncate" title="<?php echo e($voucher->name); ?>"><?php echo e($voucher->name); ?></h3>
        <p class="text-sm text-gray-600 mb-4 line-clamp-2"><?php echo e($voucher->description); ?></p>

        <div class="flex items-center justify-between mt-auto">
            <span class="text-lg font-bold text-blue-600">
                Rp <?php echo e(number_format($voucher->price, 0, ',', '.')); ?>

            </span>
            <a href="<?php echo e(route('voucher.show', $voucher)); ?>"
                class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-full transition-colors shadow-sm">
                Detail
            </a>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\Laravel-LP-premium-voucher\resources\views/components/voucher-card.blade.php ENDPATH**/ ?>