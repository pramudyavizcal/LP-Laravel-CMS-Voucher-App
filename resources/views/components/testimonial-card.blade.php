@props(['testimonial'])

<div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1"
    data-aos="fade-up" data-aos-delay="100">
    <div class="flex items-center mb-4">
        @if($testimonial->photo_path)
            <img src="{{ asset('storage/' . $testimonial->photo_path) }}" alt="{{ $testimonial->name }}"
                class="h-12 w-12 rounded-full object-cover mr-4">
        @else
            <div
                class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold text-xl mr-4">
                {{ substr($testimonial->name, 0, 1) }}
            </div>
        @endif
        <div>
            <h4 class="font-bold text-gray-900">{{ $testimonial->name }}</h4>
            <div class="text-yellow-400 text-sm">
                @for($i = 0; $i < $testimonial->rating; $i++) ★ @endfor
                <span class="text-gray-300">@for($i = $testimonial->rating; $i < 5; $i++) ★ @endfor</span>
            </div>
        </div>
    </div>
    <p class="text-gray-600 text-sm italic">
        "{{ $testimonial->content }}"
    </p>
</div>