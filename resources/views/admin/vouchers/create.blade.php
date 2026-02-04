@extends('layouts.admin')

@section('header', 'Create Voucher')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.vouchers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Voucher Name</label>
                <input type="text" name="name" id="name"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('name') }}" required>
                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium mb-2">Price (Rp)</label>
                <input type="number" name="price" id="price"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('price') }}" required min="0">
                @error('price') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" rows="3"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
                <input type="file" name="image" id="image"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">
                <p class="text-xs text-gray-500 mt-1">Format: jpeg, png, jpg, gif. Maksimal ukuran: 2MB. Rekomendasi ukuran:
                    800 x 400 pixel.</p>
            </div>

            <div class="mb-6 grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <input type="checkbox" name="is_best_seller" id="is_best_seller"
                        class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" value="1" {{ old('is_best_seller') ? 'checked' : '' }}>
                    <label for="is_best_seller" class="ml-2 block text-gray-700">Best Seller</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="is_promo" id="is_promo"
                        class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" value="1" {{ old('is_promo') ? 'checked' : '' }}>
                    <label for="is_promo" class="ml-2 block text-gray-700">Promo</label>
                </div>
            </div>

            <hr class="my-6 border-gray-200">
            <h3 class="text-lg font-medium text-gray-900 mb-4">SEO Settings</h3>

            <div class="mb-4">
                <label for="meta_title" class="block text-gray-700 font-medium mb-2">Meta Title (SEO)</label>
                <input type="text" name="meta_title" id="meta_title"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('meta_title') }}">
            </div>

            <div class="mb-4">
                <label for="meta_description" class="block text-gray-700 font-medium mb-2">Meta Description (SEO)</label>
                <textarea name="meta_description" id="meta_description" rows="2"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">{{ old('meta_description') }}</textarea>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.vouchers.index') }}"
                    class="mr-4 px-4 py-2 text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 shadow-md transition">Save
                    Voucher</button>
            </div>
        </form>
    </div>
@endsection