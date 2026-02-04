@extends('layouts.admin')

@section('header', 'Testimonials')

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Manage Testimonials</h2>
        <a href="{{ route('admin.testimonials.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
            + New Testimonial
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Photo</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Content</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($testimonials as $testimonial)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($testimonial->photo_path)
                                <img src="{{ asset('storage/' . $testimonial->photo_path) }}" alt="Photo" class="h-10 w-10 rounded-full object-cover">
                            @else
                                <div class="h-10 w-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 text-xs">No Photo</div>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $testimonial->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-yellow-500">
                            @for($i = 0; $i < $testimonial->rating; $i++) ★ @endfor
                            <span class="text-gray-300">@for($i = $testimonial->rating; $i < 5; $i++) ★ @endfor</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ Str::limit($testimonial->content, 30) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">No Testimonials found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
