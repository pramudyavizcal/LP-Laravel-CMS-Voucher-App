<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Premium Vouchers | Best Deals</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Outfit:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="antialiased bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300" x-data="{ scrolled: false, mobileOpen: false }"
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'bg-white shadow-md py-2' : 'bg-transparent py-4'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-extrabold tracking-tighter"
                        :class="scrolled ? 'text-blue-600' : 'text-white'">
                        PREMIUM<span :class="scrolled ? 'text-gray-800' : 'text-blue-200'">VOUCHER</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="font-medium hover:text-blue-500 transition"
                        :class="scrolled ? 'text-gray-600' : 'text-gray-200'">Dashboard</a>
                    <a href="#products" class="font-medium hover:text-blue-500 transition"
                        :class="scrolled ? 'text-gray-600' : 'text-gray-200'">Voucher</a>
                    <a href="#benefits" class="font-medium hover:text-blue-500 transition"
                        :class="scrolled ? 'text-gray-600' : 'text-gray-200'">Benefits</a>
                    <a href="#testimonials" class="font-medium hover:text-blue-500 transition"
                        :class="scrolled ? 'text-gray-600' : 'text-gray-200'">Testimonials</a>
                    <a href="#faq" class="font-medium hover:text-blue-500 transition"
                        :class="scrolled ? 'text-gray-600' : 'text-gray-200'">FAQ</a>


                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileOpen = !mobileOpen" class="focus:outline-none"
                        :class="scrolled ? 'text-gray-800' : 'text-white'">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileOpen" x-transition x-cloak
            class="md:hidden bg-white shadow-xl absolute top-full left-0 w-full">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="#home" @click="mobileOpen = false"
                    class="block py-2 text-gray-800 font-medium hover:text-blue-600">Dashboard</a>
                <a href="#products" @click="mobileOpen = false"
                    class="block py-2 text-gray-800 font-medium hover:text-blue-600">Products</a>
                <a href="#benefits" @click="mobileOpen = false"
                    class="block py-2 text-gray-800 font-medium hover:text-blue-600">Benefits</a>
                <a href="#testimonials" @click="mobileOpen = false"
                    class="block py-2 text-gray-800 font-medium hover:text-blue-600">Testimonials</a>
                <a href="#faq" @click="mobileOpen = false"
                    class="block py-2 text-gray-800 font-medium hover:text-blue-600">FAQ</a>

            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <?php if (isset($component)) { $__componentOriginal04f02f1e0f152287a127192de01fe241 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal04f02f1e0f152287a127192de01fe241 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero','data' => ['hero' => $heroSection]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['hero' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heroSection)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $attributes = $__attributesOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__attributesOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal04f02f1e0f152287a127192de01fe241)): ?>
<?php $component = $__componentOriginal04f02f1e0f152287a127192de01fe241; ?>
<?php unset($__componentOriginal04f02f1e0f152287a127192de01fe241); ?>
<?php endif; ?>

    <!-- Vouchers Section -->
    <section id="products" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Premium <span
                        class="text-blue-600">Vouchers</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Choose from our best selection of premium vouchers at
                    unbeatable prices.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php $__empty_1 = true; $__currentLoopData = $vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if (isset($component)) { $__componentOriginalc814772b35f7e89d78074b0adebd686d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc814772b35f7e89d78074b0adebd686d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.voucher-card','data' => ['voucher' => $voucher]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('voucher-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['voucher' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($voucher)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc814772b35f7e89d78074b0adebd686d)): ?>
<?php $attributes = $__attributesOriginalc814772b35f7e89d78074b0adebd686d; ?>
<?php unset($__attributesOriginalc814772b35f7e89d78074b0adebd686d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc814772b35f7e89d78074b0adebd686d)): ?>
<?php $component = $__componentOriginalc814772b35f7e89d78074b0adebd686d; ?>
<?php unset($__componentOriginalc814772b35f7e89d78074b0adebd686d); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-span-full text-center py-10 text-gray-500">
                        No vouchers available at the moment.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose <span
                        class="text-blue-600">Us?</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We provide the best service and experience for our customers.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php $__empty_1 = true; $__currentLoopData = $benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if (isset($component)) { $__componentOriginal249caa7740e06d2a018a747e0282a1f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal249caa7740e06d2a018a747e0282a1f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.benefit-item','data' => ['benefit' => $benefit]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('benefit-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['benefit' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($benefit)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal249caa7740e06d2a018a747e0282a1f3)): ?>
<?php $attributes = $__attributesOriginal249caa7740e06d2a018a747e0282a1f3; ?>
<?php unset($__attributesOriginal249caa7740e06d2a018a747e0282a1f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal249caa7740e06d2a018a747e0282a1f3)): ?>
<?php $component = $__componentOriginal249caa7740e06d2a018a747e0282a1f3; ?>
<?php unset($__componentOriginal249caa7740e06d2a018a747e0282a1f3); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-span-full text-center text-gray-500">No benefits listed.</div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Customer <span
                        class="text-blue-600">Stories</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">See what our satisfied customers have to say about us.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal6426b16f7e43cdd8260215c3f2dbf890 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6426b16f7e43cdd8260215c3f2dbf890 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.testimonial-card','data' => ['testimonial' => $testimonial]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('testimonial-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['testimonial' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonial)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6426b16f7e43cdd8260215c3f2dbf890)): ?>
<?php $attributes = $__attributesOriginal6426b16f7e43cdd8260215c3f2dbf890; ?>
<?php unset($__attributesOriginal6426b16f7e43cdd8260215c3f2dbf890); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6426b16f7e43cdd8260215c3f2dbf890)): ?>
<?php $component = $__componentOriginal6426b16f7e43cdd8260215c3f2dbf890; ?>
<?php unset($__componentOriginal6426b16f7e43cdd8260215c3f2dbf890); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked <span
                        class="text-blue-600">Questions</span></h2>
            </div>

            <div class="space-y-4">
                <?php $__empty_1 = true; $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if (isset($component)) { $__componentOriginalfe0129bdd3eda14493d52cb648216c99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe0129bdd3eda14493d52cb648216c99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.faq-item','data' => ['faq' => $faq]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('faq-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['faq' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faq)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe0129bdd3eda14493d52cb648216c99)): ?>
<?php $attributes = $__attributesOriginalfe0129bdd3eda14493d52cb648216c99; ?>
<?php unset($__attributesOriginalfe0129bdd3eda14493d52cb648216c99); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe0129bdd3eda14493d52cb648216c99)): ?>
<?php $component = $__componentOriginalfe0129bdd3eda14493d52cb648216c99; ?>
<?php unset($__componentOriginalfe0129bdd3eda14493d52cb648216c99); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="text-center text-gray-500">No FAQs yet.</div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">PREMIUM<span class="text-blue-500">VOUCHER</span></h3>
                    <p class="text-gray-400 mb-6 max-w-md">
                        <?php echo e($settings['footer_text'] ?? 'Providing standard and premium vouchers for all your needs. Guaranteed secure and fast transaction.'); ?>

                    </p>
                    <div class="flex space-x-4">
                        <?php if(!empty($settings['facebook_link'])): ?>
                            <a href="<?php echo e($settings['facebook_link']); ?>" class="text-gray-400 hover:text-white transition"><i
                                    class="fab fa-facebook-f text-xl"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($settings['instagram_link'])): ?>
                            <a href="<?php echo e($settings['instagram_link']); ?>" class="text-gray-400 hover:text-white transition"><i
                                    class="fab fa-instagram text-xl"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($settings['twitter_link'])): ?>
                            <a href="<?php echo e($settings['twitter_link']); ?>" class="text-gray-400 hover:text-white transition"><i
                                    class="fab fa-twitter text-xl"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#home" class="hover:text-blue-400">Dashboard</a></li>
                        <li><a href="#products" class="hover:text-blue-400">Vouchers</a></li>
                        <li><a href="#testimonials" class="hover:text-blue-400">Testimonials</a></li>
                        <li><a href="#faq" class="hover:text-blue-400">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fab fa-whatsapp mr-2 text-green-500"></i>
                            <?php echo e($settings['whatsapp_number'] ?? '-'); ?></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500 text-sm">
                &copy; <?php echo e(date('Y')); ?> Premium Voucher. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <?php if (isset($component)) { $__componentOriginalb1d8d7f05c60096cb6b14d5fdfd87053 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1d8d7f05c60096cb6b14d5fdfd87053 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.floating-wa','data' => ['settings' => $settings]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('floating-wa'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['settings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($settings)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1d8d7f05c60096cb6b14d5fdfd87053)): ?>
<?php $attributes = $__attributesOriginalb1d8d7f05c60096cb6b14d5fdfd87053; ?>
<?php unset($__attributesOriginalb1d8d7f05c60096cb6b14d5fdfd87053); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1d8d7f05c60096cb6b14d5fdfd87053)): ?>
<?php $component = $__componentOriginalb1d8d7f05c60096cb6b14d5fdfd87053; ?>
<?php unset($__componentOriginalb1d8d7f05c60096cb6b14d5fdfd87053); ?>
<?php endif; ?>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
once: true,
            duration: 800,
            offset: 50,
        });
    </script>
</body>

</html><?php /**PATH C:\laragon\www\Laravel-LP-premium-voucher\resources\views/welcome.blade.php ENDPATH**/ ?>