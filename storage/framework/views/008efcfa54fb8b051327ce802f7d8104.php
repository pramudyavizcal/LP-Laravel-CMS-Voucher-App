<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['testimonial']));

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

foreach (array_filter((['testimonial']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1"
    data-aos="fade-up" data-aos-delay="100">
    <div class="flex items-center mb-4">
        <?php if($testimonial->photo_path): ?>
            <img src="<?php echo e(asset('storage/' . $testimonial->photo_path)); ?>" alt="<?php echo e($testimonial->name); ?>"
                class="h-12 w-12 rounded-full object-cover mr-4">
        <?php else: ?>
            <div
                class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-xl mr-4">
                <?php echo e(substr($testimonial->name, 0, 1)); ?>

            </div>
        <?php endif; ?>
        <div>
            <h4 class="font-bold text-gray-900"><?php echo e($testimonial->name); ?></h4>
            <div class="text-yellow-400 text-sm">
                <?php for($i = 0; $i < $testimonial->rating; $i++): ?> ★ <?php endfor; ?>
                <span class="text-gray-300"><?php for($i = $testimonial->rating; $i < 5; $i++): ?> ★ <?php endfor; ?></span>
            </div>
        </div>
    </div>
    <p class="text-gray-600 text-sm italic">
        "<?php echo e($testimonial->content); ?>"
    </p>
</div><?php /**PATH C:\laragon\www\Laravel-LP-premium-voucher\resources\views/components/testimonial-card.blade.php ENDPATH**/ ?>