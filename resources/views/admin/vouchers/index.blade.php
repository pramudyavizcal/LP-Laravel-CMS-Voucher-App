@extends('layouts.admin')

@section('header', 'Vouchers')

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Manage Vouchers</h2>
        <a href="{{ route('admin.vouchers.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
            + New Voucher
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Badges</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($vouchers as $voucher)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($voucher->image_path)
                                <img src="{{ asset('storage/' . $voucher->image_path) }}" alt="Voucher Image"
                                    class="h-12 w-12 object-cover rounded-full">
                            @else
                                <div class="h-12 w-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-400">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                    </svg>
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $voucher->name }}</div>
                            <div class="text-sm text-gray-500">{{ Str::limit($voucher->description, 30) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Rp {{ number_format($voucher->price, 0, ',', '.') }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($voucher->is_best_seller)
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 mr-1">Best
                                    Seller</span>
                            @endif
                            @if($voucher->is_promo)
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Promo</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('admin.vouchers.edit', $voucher) }}"
                                class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <form action="{{ route('admin.vouchers.destroy', $voucher) }}" method="POST" class="inline-block"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">No Vouchers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection