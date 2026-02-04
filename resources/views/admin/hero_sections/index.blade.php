@extends('layouts.admin')

@section('header', 'Hero Sections')

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Manage Hero Sections</h2>
        <a href="{{ route('admin.hero-sections.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
            + New Hero Section
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($heroSections as $hero)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($hero->image_path)
                                <img src="{{ asset('storage/' . $hero->image_path) }}" alt="Hero Image"
                                    class="h-12 w-20 object-cover rounded">
                            @else
                                <span class="text-gray-400">No Image</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $hero->title }}</div>
                            <div class="text-sm text-gray-500">{{ Str::limit($hero->subtitle, 30) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $hero->active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ $hero->active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.hero-sections.edit', $hero) }}"
                                class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <form action="{{ route('admin.hero-sections.destroy', $hero) }}" method="POST" class="inline-block"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">No Hero Sections found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection