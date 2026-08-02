<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Menampilkan daftar testimonial.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Form tambah testimonial.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Simpan testimonial.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'job'       => 'nullable|string|max:255',
            'message'   => 'required|string',
            'rating'    => 'required|integer|min:1|max:5',
            'photo'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Upload foto
        if ($request->hasFile('photo')) {

            $validated['photo'] = $request->file('photo')
                ->store('testimonials', 'public');
        }

        // Checkbox
        $validated['is_active'] = $request->has('is_active');

        Testimonial::create($validated);

        return redirect()
            ->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil ditambahkan.');
    }

    /**
     * Detail testimonial.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Form edit testimonial.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update testimonial.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'job'       => 'nullable|string|max:255',
            'message'   => 'required|string',
            'rating'    => 'required|integer|min:1|max:5',
            'photo'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('photo')) {

            if ($testimonial->photo &&
                Storage::disk('public')->exists($testimonial->photo)) {

                Storage::disk('public')->delete($testimonial->photo);
            }

            $validated['photo'] = $request->file('photo')
                ->store('testimonials', 'public');
        }

        $testimonial->update($validated);

        return redirect()
            ->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil diperbarui.');
    }

    /**
     * Hapus testimonial.
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo &&
            Storage::disk('public')->exists($testimonial->photo)) {

            Storage::disk('public')->delete($testimonial->photo);
        }

        $testimonial->delete();

        return redirect()
            ->route('admin.testimonials.index')
            ->with('success', 'Testimonial berhasil dihapus.');
    }
}