<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $voucher->name }} - Premium Vouchers</title>

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
    </style>
</head>

<body class="antialiased bg-gray-50 text-gray-800">

    <!-- Simple Navbar -->
    <nav class="bg-white shadow-sm py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-extrabold tracking-tighter text-blue-600">
                PREMIUM<span class="text-gray-800">VOUCHER</span>
            </a>
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 font-medium transition">
                <i class="fas fa-arrow-left mr-2"></i> Back to Home
            </a>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row">
            <!-- Product Image -->
            <div class="md:w-1/2 relative bg-gray-100 h-64 md:h-auto">
                @if($voucher->image_path)
                    <img src="{{ asset('storage/' . $voucher->image_path) }}" alt="{{ $voucher->name }}"
                        class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                        <svg class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                @endif

                @if($voucher->is_best_seller)
                    <div
                        class="absolute top-4 right-4 bg-yellow-500 text-white text-sm font-bold px-3 py-1 rounded shadow-md">
                        BEST SELLER
                    </div>
                @endif
                @if($voucher->is_promo)
                    <div class="absolute top-4 left-4 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded shadow-md">
                        PROMO
                    </div>
                @endif
            </div>

            <!-- Product Details -->
            <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">{{ $voucher->name }}</h1>

                <div class="text-3xl font-bold text-blue-600 mb-6">
                    Rp {{ number_format($voucher->price, 0, ',', '.') }}
                </div>

                <div class="prose prose-blue max-w-none text-gray-600 mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Description</h3>
                    <p class="leading-relaxed">
                        {{ $voucher->description }}
                    </p>
                </div>

                <div class="mt-auto pt-6 border-t border-gray-100">
                    <p class="text-sm text-gray-500 mb-4">Contact us via WhatsApp to purchase this voucher instantly.
                    </p>

                    <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', $settings['whatsapp_number'] ?? '')) }}?text=Halo%2C%20saya%20tertarik%20membeli%20{{ urlencode($voucher->name) }}"
                        target="_blank"
                        class="w-full inline-flex items-center justify-center px-6 py-4 bg-green-500 hover:bg-green-600 text-white font-bold text-lg rounded-xl transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <i class="fab fa-whatsapp text-2xl mr-3"></i>
                        Buy Now via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp -->
    <x-floating-wa :settings="$settings" />

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>