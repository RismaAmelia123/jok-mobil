<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Gallery;
use App\Models\Service;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with('service')
            ->latest()
            ->get();

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        $services = Service::where('is_active', true)->get();

        return view('admin.galleries.create', compact('services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'title'      => 'required|max:255',
            'image'      => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['image'] = $request
            ->file('image')
            ->store('galleries', 'public');

        $validated['is_active'] = $request->has('is_active');

        Gallery::create($validated);

        return redirect()
            ->route('admin.galleries.index')
            ->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    public function show(Gallery $gallery)
    {
        //
    }

    public function edit(Gallery $gallery)
    {
        $services = Service::where('is_active', true)->get();

        return view('admin.galleries.edit', compact(
            'gallery',
            'services'
        ));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'title'      => 'required|max:255',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {

            if ($gallery->image &&
                Storage::disk('public')->exists($gallery->image)) {

                Storage::disk('public')->delete($gallery->image);
            }

            $validated['image'] = $request
                ->file('image')
                ->store('galleries', 'public');
        }

        $gallery->update($validated);

        return redirect()
            ->route('admin.galleries.index')
            ->with('success', 'Foto galeri berhasil diperbarui.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image &&
            Storage::disk('public')->exists($gallery->image)) {

            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()
            ->route('admin.galleries.index')
            ->with('success', 'Foto galeri berhasil dihapus.');
    }
}