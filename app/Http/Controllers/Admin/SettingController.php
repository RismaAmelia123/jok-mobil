<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
        /**
     * Menampilkan informasi website.
     */
    public function index()
    {
        $setting = Setting::first();

        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Menampilkan halaman pengaturan website.
     */
    public function edit()
    {
        $setting = Setting::first();

        if (!$setting) {

            $setting = Setting::create([
                'company_name' => 'Jok Mobil'
            ]);

        }

        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update pengaturan website.
     */
    public function update(Request $request)
    {
        $setting = Setting::first();

        $validated = $request->validate([

            'company_name' => 'required|max:255',

            'hero_title' => 'nullable|max:255',
            'hero_subtitle' => 'nullable',

            'about' => 'nullable',

            'phone' => 'nullable|max:30',
            'email' => 'nullable|email',
            'address' => 'nullable',

            'open_days' => 'nullable|max:100',
            'open_hours' => 'nullable|max:100',
            'holiday' => 'nullable|max:100',

            'facebook' => 'nullable|max:255',
            'instagram' => 'nullable|max:255',
            'tiktok' => 'nullable|max:255',
            'youtube' => 'nullable|max:255',

            'maps' => 'nullable',

            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);

        // Upload logo baru
        if ($request->hasFile('logo')) {

            if ($setting->logo &&
                Storage::disk('public')->exists($setting->logo)) {

                Storage::disk('public')->delete($setting->logo);

            }

            $validated['logo'] = $request
                ->file('logo')
                ->store('settings', 'public');
        }

        $setting->update($validated);

        return redirect()
            ->route('admin.settings.index')
            ->with('success', 'Pengaturan website berhasil diperbarui.');
    }
}