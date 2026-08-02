<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Material;
use App\Models\Service;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::with('service')
            ->latest()
            ->get();

        return view('admin.materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = \App\Models\Service::where('is_active', true)->get();

        return view('admin.materials.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name'       => 'required|max:255',
            'type'       => 'required|max:255',
            'price'      => 'required|numeric|min:0',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // upload gambar
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('materials', 'public');
        }

        // checkbox
        $validated['is_active'] = $request->has('is_active');

        Material::create($validated);

        return redirect()
            ->route('admin.materials.index')
            ->with('success', 'Bahan interior berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        $services = Service::where('is_active', true)->get();

        return view('admin.materials.edit', compact(
            'material',
            'services'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name'       => 'required|string|max:255',
            'type'       => 'nullable|string|max:255',
            'price'      => 'required|numeric',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // checkbox
        $validated['is_active'] = $request->has('is_active');

        // upload foto baru
        if ($request->hasFile('image')) {

            // hapus foto lama
            if ($material->image && Storage::disk('public')->exists($material->image)) {
                Storage::disk('public')->delete($material->image);
            }

            $validated['image'] = $request
                ->file('image')
                ->store('materials', 'public');
        }

        $material->update($validated);

        return redirect()
            ->route('admin.materials.index')
            ->with('success', 'Bahan interior berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        // Hapus foto jika ada
        if ($material->image && Storage::disk('public')->exists($material->image)) {
            \Storage::disk('public')->delete($material->image);
        }

        // Hapus data
        $material->delete();

        return redirect()
            ->route('admin.materials.index')
            ->with('success', 'Bahan interior berhasil dihapus.');
    }
}
