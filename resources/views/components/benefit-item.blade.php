@props(['benefit'])

<div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-xl hover:bg-white hover:shadow-lg transition duration-300 border border-transparent hover:border-gray-200"
    data-aos="fade-up" data-aos-delay="100">
    <div class="h-16 w-16 bg-blue-100 rounded-full flex items-center justify-center text-3xl mb-4 text-blue-600">
        @if(Str::startsWith($benefit->icon, 'fa-') || Str::contains($benefit->icon, 'icon-'))
            <i class="{{ $benefit->icon }}"></i>
        @else
            {{ $benefit->icon }}
        @endif
    </div>
    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $benefit->title }}</h3>
    <p class="text-gray-600 text-sm leading-relaxed">
        {{ $benefit->description }}
    </p>
</div>