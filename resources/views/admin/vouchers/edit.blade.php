@extends('layouts.admin')

@section('header', 'Edit Voucher')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.vouchers.update', $voucher) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Voucher Name</label>
                <input type="text" name="name" id="name"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('name', $voucher->name) }}" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium mb-2">Price (Rp)</label>
                <input type="number" name="price" id="price"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('price', $voucher->price) }}" required min="0">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" rows="3"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">{{ old('description', $voucher->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
                @if($voucher->image_path)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $voucher->image_path) }}" alt="Current Image"
                            class="h-20 w-auto rounded">
                    </div>
                @endif
                <input type="file" name="image" id="image"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">
                <p class="text-xs text-gray-500 mt-1">Format: jpeg, png, jpg, gif. Maksimal ukuran: 2MB. Rekomendasi ukuran:
                    800 x 400 pixel. Biarkan kosong jika
                    tidak ingin mengubah gambar.</p>
            </div>

            <div class="mb-6 grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <input type="checkbox" name="is_best_seller" id="is_best_seller"
                        class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" value="1" {{ old('is_best_seller', $voucher->is_best_seller) ? 'checked' : '' }}>
                    <label for="is_best_seller" class="ml-2 block text-gray-700">Best Seller</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="is_promo" id="is_promo"
                        class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" value="1" {{ old('is_promo', $voucher->is_promo) ? 'checked' : '' }}>
                    <label for="is_promo" class="ml-2 block text-gray-700">Promo</label>
                </div>
            </div>

            <hr class="my-6 border-gray-200">
            <h3 class="text-lg font-medium text-gray-900 mb-4">SEO Settings</h3>

            <div class="mb-4">
                <label for="meta_title" class="block text-gray-700 font-medium mb-2">Meta Title (SEO)</label>
                <input type="text" name="meta_title" id="meta_title"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('meta_title', $voucher->meta_title) }}">
            </div>

            <div class="mb-4">
                <label for="meta_description" class="block text-gray-700 font-medium mb-2">Meta Description (SEO)</label>
                <textarea name="meta_description" id="meta_description" rows="2"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">{{ old('meta_description', $voucher->meta_description) }}</textarea>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.vouchers.index') }}"
                    class="mr-4 px-4 py-2 text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 shadow-md transition">Update
                    Voucher</button>
            </div>
        </form>
    </div>
@endsection