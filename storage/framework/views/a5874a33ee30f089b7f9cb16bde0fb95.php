<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['benefit']));

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

foreach (array_filter((['benefit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-xl hover:bg-white hover:shadow-lg transition duration-300 border border-transparent hover:border-gray-200"
    data-aos="fade-up" data-aos-delay="100">
    <div class="h-16 w-16 bg-blue-100 rounded-full flex items-center justify-center text-3xl mb-4 text-blue-600">
        <?php if(Str::startsWith($benefit->icon, 'fa-') || Str::contains($benefit->icon, 'icon-')): ?>
            <i class="<?php echo e($benefit->icon); ?>"></i>
        <?php else: ?>
            <?php echo e($benefit->icon); ?>

        <?php endif; ?>
    </div>
    <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo e($benefit->title); ?></h3>
    <p class="text-gray-600 text-sm leading-relaxed">
        <?php echo e($benefit->description); ?>

    </p>
</div><?php /**PATH C:\laragon\www\Laravel-LP-premium-voucher\resources\views/components/benefit-item.blade.php ENDPATH**/ ?>