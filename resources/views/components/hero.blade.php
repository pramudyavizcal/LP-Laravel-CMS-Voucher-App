@props(['hero'])

<section id="home" class="relative bg-gray-900 overflow-hidden">
    @if($hero && $hero->image_path)
        <div class="absolute inset-0">
            <img src="{{ asset('storage/' . $hero->image_path) }}" alt="Background"
                class="w-full h-full object-cover object-center opacity-40 animate-ken-burns">
        </div>
    @else
        <div class="absolute inset-0 bg-gradient-to-r from-purple-800 to-blue-900 opacity-90"></div>
    @endif

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 flex flex-col items-center text-center">
        @if($hero)
            <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight mb-4 animate-fade-in-down">
                {{ $hero->title }}
            </h1>
            @if($hero->subtitle)
                <p class="text-xl md:text-2xl text-white max-w-3xl mb-8 animate-fade-in-up">
                    {{ $hero->subtitle }}
                </p>
            @endif
            @if($hero->description)
                <p class="text-lg text-white max-w-2xl mb-10 animate-fade-in-up delay-100">
                    {{ $hero->description }}
                </p>
            @endif
            @if($hero->cta_text && $hero->cta_link)
                <a href="{{ $hero->cta_link }}"
                    class="inline-block bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transform transition hover:scale-105 animate-bounce-in">
                    {{ $hero->cta_text }}
                </a>
            @endif
        @else
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
        @endif
    </div>
</section>