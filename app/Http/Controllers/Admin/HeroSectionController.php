<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::latest()->get();
        return view('admin.hero_sections.index', compact('heroSections'));
    }

    public function create()
    {
        return view('admin.hero_sections.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cta_text' => 'nullable|string|max:50',
            'cta_link' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('hero-images', 'public');
        }

        $validated['active'] = $request->has('active');

        HeroSection::create($validated);

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero Section created successfully.');
    }

    public function edit(HeroSection $heroSection)
    {
        return view('admin.hero_sections.edit', compact('heroSection'));
    }

    public function update(Request $request, HeroSection $heroSection)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cta_text' => 'nullable|string|max:50',
            'cta_link' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            if ($heroSection->image_path) {
                Storage::disk('public')->delete($heroSection->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('hero-images', 'public');
        }

        $validated['active'] = $request->has('active');

        $heroSection->update($validated);

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero Section updated successfully.');
    }

    public function destroy(HeroSection $heroSection)
    {
        if ($heroSection->image_path) {
            Storage::disk('public')->delete($heroSection->image_path);
        }
        $heroSection->delete();

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero Section deleted successfully.');
    }
}
