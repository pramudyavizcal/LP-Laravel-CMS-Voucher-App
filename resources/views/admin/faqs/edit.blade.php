@extends('layouts.admin')

@section('header', 'Edit FAQ')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="question" class="block text-gray-700 font-medium mb-2">Question</label>
                <input type="text" name="question" id="question"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    value="{{ old('question', $faq->question) }}" required>
            </div>

            <div class="mb-6">
                <label for="answer" class="block text-gray-700 font-medium mb-2">Answer</label>
                <textarea name="answer" id="answer" rows="4"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-100"
                    required>{{ old('answer', $faq->answer) }}</textarea>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.faqs.index') }}"
                    class="mr-4 px-4 py-2 text-gray-600 hover:text-gray-800">Cancel</a>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 shadow-md transition">Update
                    FAQ</button>
            </div>
        </form>
    </div>
@endsection