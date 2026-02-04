@extends('layouts.admin')

@section('header', 'Settings')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf

            <h3 class="text-lg font-medium text-gray-900 mb-4">WhatsApp Integration</h3>
            <div class="mb-4">
                <label for="whatsapp_number" class="block text-gray-700 font-medium mb-2">WhatsApp Number (e.g.
                    628123456789)</label>
                <input type="text" name="whatsapp_number" id="whatsapp_number"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('whatsapp_number', $settings['whatsapp_number'] ?? '') }}">
            </div>
            <div class="mb-6">
                <label for="whatsapp_message" class="block text-gray-700 font-medium mb-2">Default Message</label>
                <textarea name="whatsapp_message" id="whatsapp_message" rows="2"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">{{ old('whatsapp_message', $settings['whatsapp_message'] ?? 'Halo, saya ingin membeli voucher...') }}</textarea>
            </div>

            <hr class="my-6 border-gray-200">

            <h3 class="text-lg font-medium text-gray-900 mb-4">SEO Settings (Global)</h3>
            <div class="mb-4">
                <label for="site_name" class="block text-gray-700 font-medium mb-2">Site Name</label>
                <input type="text" name="site_name" id="site_name"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('site_name', $settings['site_name'] ?? config('app.name')) }}">
            </div>
            <div class="mb-4">
                <label for="site_description" class="block text-gray-700 font-medium mb-2">Site Description</label>
                <textarea name="site_description" id="site_description" rows="2"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">{{ old('site_description', $settings['site_description'] ?? '') }}</textarea>
            </div>
            <div class="mb-4">
                <label for="site_keywords" class="block text-gray-700 font-medium mb-2">Site Keywords (comma
                    separated)</label>
                <input type="text" name="site_keywords" id="site_keywords"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    placeholder="voucher, premium, topup, murah"
                    value="{{ old('site_keywords', $settings['site_keywords'] ?? '') }}">
            </div>

            <hr class="my-6 border-gray-200">

            <h3 class="text-lg font-medium text-gray-900 mb-4">Footer & Social Media</h3>
            <div class="mb-4">
                <label for="footer_text" class="block text-gray-700 font-medium mb-2">Footer Text</label>
                <textarea name="footer_text" id="footer_text" rows="3"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">{{ old('footer_text', $settings['footer_text'] ?? '') }}</textarea>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div>
                    <label for="facebook_link" class="block text-gray-700 font-medium mb-2">Facebook Link</label>
                    <input type="url" name="facebook_link" id="facebook_link"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                        value="{{ old('facebook_link', $settings['facebook_link'] ?? '') }}">
                </div>
                <div>
                    <label for="instagram_link" class="block text-gray-700 font-medium mb-2">Instagram Link</label>
                    <input type="url" name="instagram_link" id="instagram_link"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                        value="{{ old('instagram_link', $settings['instagram_link'] ?? '') }}">
                </div>
                <div>
                    <label for="twitter_link" class="block text-gray-700 font-medium mb-2">Twitter/X Link</label>
                    <input type="url" name="twitter_link" id="twitter_link"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                        value="{{ old('twitter_link', $settings['twitter_link'] ?? '') }}">
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 shadow-md transition">Save
                    Settings</button>
            </div>
        </form>
    </div>
@endsection