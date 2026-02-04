<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
    <x-hero :hero="$heroSection" />

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
                @forelse($vouchers as $voucher)
                    <x-voucher-card :voucher="$voucher" />
                @empty
                    <div class="col-span-full text-center py-10 text-gray-500">
                        No vouchers available at the moment.
                    </div>
                @endforelse
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
                @forelse($benefits as $benefit)
                    <x-benefit-item :benefit="$benefit" />
                @empty
                    <div class="col-span-full text-center text-gray-500">No benefits listed.</div>
                @endforelse
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
                @foreach($testimonials as $testimonial)
                    <x-testimonial-card :testimonial="$testimonial" />
                @endforeach
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
                @forelse($faqs as $faq)
                    <x-faq-item :faq="$faq" />
                @empty
                    <div class="text-center text-gray-500">No FAQs yet.</div>
                @endforelse
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
                        {{ $settings['footer_text'] ?? 'Providing standard and premium vouchers for all your needs. Guaranteed secure and fast transaction.' }}
                    </p>
                    <div class="flex space-x-4">
                        @if(!empty($settings['facebook_link']))
                            <a href="{{ $settings['facebook_link'] }}" class="text-gray-400 hover:text-white transition"><i
                                    class="fab fa-facebook-f text-xl"></i></a>
                        @endif
                        @if(!empty($settings['instagram_link']))
                            <a href="{{ $settings['instagram_link'] }}" class="text-gray-400 hover:text-white transition"><i
                                    class="fab fa-instagram text-xl"></i></a>
                        @endif
                        @if(!empty($settings['twitter_link']))
                            <a href="{{ $settings['twitter_link'] }}" class="text-gray-400 hover:text-white transition"><i
                                    class="fab fa-twitter text-xl"></i></a>
                        @endif
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
                            {{ $settings['whatsapp_number'] ?? '-' }}</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} Premium Voucher. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <x-floating-wa :settings="$settings" />

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

</html>