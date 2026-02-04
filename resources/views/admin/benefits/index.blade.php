@extends('layouts.admin')

@section('header', 'Benefits')

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Manage Benefits</h2>
        <a href="{{ route('admin.benefits.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
            + New Benefit
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Icon</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description
                    </th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($benefits as $benefit)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-3xl text-gray-600">
                            <!-- Display icon if it's a class or img -->
                            @if(Str::startsWith($benefit->icon, 'fa-') || Str::contains($benefit->icon, 'icon-'))
                                <i class="{{ $benefit->icon }}"></i>
                            @else
                                {{ $benefit->icon }}
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $benefit->title }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ Str::limit($benefit->description, 50) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.benefits.edit', $benefit) }}"
                                class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <form action="{{ route('admin.benefits.destroy', $benefit) }}" method="POST" class="inline-block"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">No Benefits found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection