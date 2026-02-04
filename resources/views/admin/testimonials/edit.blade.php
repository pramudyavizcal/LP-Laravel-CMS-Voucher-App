@extends('layouts.admin')

@section('header', 'Edit Testimonial')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Customer Name</label>
                <input type="text" name="name" id="name"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('name', $testimonial->name) }}" required>
            </div>

            <div class="mb-4">
                <label for="rating" class="block text-gray-700 font-medium mb-2">Rating (1-5)</label>
                <select name="rating" id="rating"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">
                    <option value="5" {{ old('rating', $testimonial->rating) == 5 ? 'selected' : '' }}>5 Stars</option>
                    <option value="4" {{ old('rating', $testimonial->rating) == 4 ? 'selected' : '' }}>4 Stars</option>
                    <option value="3" {{ old('rating', $testimonial->rating) == 3 ? 'selected' : '' }}>3 Stars</option>
                    <option value="2" {{ old('rating', $testimonial->rating) == 2 ? 'selected' : '' }}>2 Stars</option>
                    <option value="1" {{ old('rating', $testimonial->rating) == 1 ? 'selected' : '' }}>1 Star</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-medium mb-2">Testimonial Content</label>
                <textarea name="content" id="content" rows="4"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    required>{{ old('content', $testimonial->content) }}</textarea>
            </div>

            <div class="mb-6">
                <label for="photo" class="block text-gray-700 font-medium mb-2">Photo</label>
                @if($testimonial->photo_path)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $testimonial->photo_path) }}" alt="Current Photo"
                            class="h-16 w-16 rounded-full object-cover">
                    </div>
                @endif
                <input type="file" name="photo" id="photo"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">
                <p class="text-xs text-gray-500 mt-1">Format: jpeg, png, jpg, gif. Maksimal ukuran: 2MB. Rekomendasi ukuran:
                    200 x 200 pixel. Biarkan kosong jika
                    tidak ingin mengubah foto.</p>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.testimonials.index') }}"
                    class="mr-4 px-4 py-2 text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 shadow-md transition">Update
                    Testimonial</button>
            </div>
        </form>
    </div>
@endsection