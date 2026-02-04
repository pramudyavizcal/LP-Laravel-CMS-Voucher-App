@props(['voucher'])

<div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl group relative"
    data-aos="fade-up">
    @if($voucher->is_best_seller)
        <div
            class="absolute top-0 right-0 bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg z-10 shadow-md">
            BEST SELLER
        </div>
    @endif
    @if($voucher->is_promo)
        <div class="absolute top-0 left-0 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-br-lg z-10 shadow-md">
            PROMO
        </div>
    @endif

    <div class="relative h-48 overflow-hidden">
        @if($voucher->image_path)
            <img src="{{ asset('storage/' . $voucher->image_path) }}" alt="{{ $voucher->name }}"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
        @else
            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">
                <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                </svg>
            </div>
        @endif
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition duration-300"></div>
    </div>

    <div class="p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-2 truncate" title="{{ $voucher->name }}">{{ $voucher->name }}</h3>
        <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ $voucher->description }}</p>

        <div class="flex items-center justify-between mt-auto">
            <span class="text-lg font-bold text-blue-600">
                Rp {{ number_format($voucher->price, 0, ',', '.') }}
            </span>
            <a href="{{ route('voucher.show', $voucher) }}"
                class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-full transition-colors shadow-sm">
                Detail
            </a>
        </div>
    </div>
</div>