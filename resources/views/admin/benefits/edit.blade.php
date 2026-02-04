@extends('layouts.admin')

@section('header', 'Edit Benefit')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.benefits.update', $benefit) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input type="text" name="title" id="title"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('title', $benefit->title) }}" required>
            </div>

            <div class="mb-4">
                <label for="icon" class="block text-gray-700 font-medium mb-2">Icon (Emoji or FontAwesome Class)</label>
                <input type="text" name="icon" id="icon"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('icon', $benefit->icon) }}">
            </div>

            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" rows="3"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100">{{ old('description', $benefit->description) }}</textarea>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.benefits.index') }}"
                    class="mr-4 px-4 py-2 text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 shadow-md transition">Update
                    Benefit</button>
            </div>
        </form>
    </div>
@endsection