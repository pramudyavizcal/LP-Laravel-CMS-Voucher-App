<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoucherController extends Controller
{
    public function index()
    {
        $vouchers = Voucher::latest()->get();
        return view('admin.vouchers.index', compact('vouchers'));
    }

    public function create()
    {
        return view('admin.vouchers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_best_seller' => 'nullable|boolean',
            'is_promo' => 'nullable|boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('vouchers', 'public');
        }

        $validated['is_best_seller'] = $request->has('is_best_seller');
        $validated['is_promo'] = $request->has('is_promo');

        Voucher::create($validated);

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher created successfully.');
    }

    public function edit(Voucher $voucher)
    {
        return view('admin.vouchers.edit', compact('voucher'));
    }

    public function update(Request $request, Voucher $voucher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_best_seller' => 'nullable|boolean',
            'is_promo' => 'nullable|boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($voucher->image_path) {
                Storage::disk('public')->delete($voucher->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('vouchers', 'public');
        }

        $validated['is_best_seller'] = $request->has('is_best_seller');
        $validated['is_promo'] = $request->has('is_promo');

        $voucher->update($validated);

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher updated successfully.');
    }

    public function destroy(Voucher $voucher)
    {
        if ($voucher->image_path) {
            Storage::disk('public')->delete($voucher->image_path);
        }
        $voucher->delete();

        return redirect()->route('admin.vouchers.index')->with('success', 'Voucher deleted successfully.');
    }
}
