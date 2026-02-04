<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['hero']));

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

foreach (array_filter((['hero']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<section id="home" class="relative bg-gray-900 overflow-hidden">
    <?php if($hero && $hero->image_path): ?>
        <div class="absolute inset-0">
            <img src="<?php echo e(asset('storage/' . $hero->image_path)); ?>" alt="Background"
                class="w-full h-full object-cover object-center opacity-40 animate-ken-burns">
        </div>
    <?php else: ?>
        <div class="absolute inset-0 bg-gradient-to-r from-purple-800 to-blue-900 opacity-90"></div>
    <?php endif; ?>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 flex flex-col items-center text-center">
        <?php if($hero): ?>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight mb-4 animate-fade-in-down">
                <?php echo e($hero->title); ?>

            </h1>
            <?php if($hero->subtitle): ?>
                <p class="text-xl md:text-2xl text-white max-w-3xl mb-8 animate-fade-in-up">
                    <?php echo e($hero->subtitle); ?>

                </p>
            <?php endif; ?>
            <?php if($hero->description): ?>
                <p class="text-lg text-white max-w-2xl mb-10 animate-fade-in-up delay-100">
                    <?php echo e($hero->description); ?>

                </p>
            <?php endif; ?>
            <?php if($hero->cta_text && $hero->cta_link): ?>
                <a href="<?php echo e($hero->cta_link); ?>"
                    class="inline-block bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transform transition hover:scale-105 animate-bounce-in">
                    <?php echo e($hero->cta_text); ?>

                </a>
            <?php endif; ?>
        <?php else: ?>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight mb-4">
                Welcome to Premium Vouchers
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mb-8">
                Get the best deals on premium vouchers today!
            </p>
            <a href="#products"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition">
                Shop Now
            </a>
        <?php endif; ?>
    </div>
</section><?php /**PATH C:\laragon\www\Laravel-LP-premium-voucher\resources\views/components/hero.blade.php ENDPATH**/ ?>