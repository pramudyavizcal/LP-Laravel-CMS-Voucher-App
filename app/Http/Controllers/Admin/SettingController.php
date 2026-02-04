<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'footer_text' => 'nullable|string',
            'whatsapp_number' => 'nullable|string',
            'whatsapp_message' => 'nullable|string',
            'facebook_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'site_name' => 'nullable|string|max:255',
            'site_description' => 'nullable|string',
            'site_keywords' => 'nullable|string',
        ]);

        foreach ($validated as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
    }
}
