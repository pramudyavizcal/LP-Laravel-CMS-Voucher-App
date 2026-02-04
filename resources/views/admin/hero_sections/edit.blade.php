@extends('layouts.admin')

@section('header', 'Edit Hero Section')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.hero-sections.update', $heroSection) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input type="text" name="title" id="title"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('title', $heroSection->title) }}" required>
            </div>

            <div class="mb-4">
                <label for="subtitle" class="block text-gray-700 font-medium mb-2">Subtitle</label>
                <input type="text" name="subtitle" id="subtitle"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('subtitle', $heroSection->subtitle) }}">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" rows="3"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">{{ old('description', $heroSection->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Background Image</label>
                @if($heroSection->image_path)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $heroSection->image_path) }}" alt="Current Image"
                            class="h-20 w-auto rounded">
                    </div>
                @endif
                <input type="file" name="image" id="image"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">
                <p class="text-xs text-gray-500 mt-1">Format: jpeg, png, jpg, gif. Maksimal ukuran: 2MB. Rekomendasi ukuran:
                    1920 x 1080 pixel. Biarkan kosong jika
                    tidak ingin mengubah gambar.</p>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="cta_text" class="block text-gray-700 font-medium mb-2">CTA Text</label>
                    <input type="text" name="cta_text" id="cta_text"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                        value="{{ old('cta_text', $heroSection->cta_text) }}">
                </div>
                <div>
                    <label for="cta_link" class="block text-gray-700 font-medium mb-2">CTA Link</label>
                    <input type="text" name="cta_link" id="cta_link"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                        value="{{ old('cta_link', $heroSection->cta_link) }}">
                </div>
            </div>

            <div class="mb-6 flex items-center">
                <input type="checkbox" name="active" id="active"
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" value="1" {{ old('active', $heroSection->active) ? 'checked' : '' }}>
                <label for="active" class="ml-2 block text-gray-700">Active</label>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.hero-sections.index') }}"
                    class="mr-4 px-4 py-2 text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 shadow-md transition">Update Hero
                    Section</button>
            </div>
        </form>
    </div>
@endsection