<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Menampilkan daftar FAQ.
     */
    public function index()
    {
        $faqs = Faq::orderBy('sort_order')
                    ->latest()
                    ->get();

        return view('admin.faqs.index', compact('faqs'));
    }

    /**
     * Menampilkan form tambah FAQ.
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Menyimpan FAQ baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question'   => 'required|max:255',
            'answer'     => 'required',
            'sort_order' => 'nullable|integer|min:0',
            'is_active'  => 'nullable',
        ]);

        $validated['is_active'] = $request->has('is_active');

        Faq::create($validated);

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'FAQ berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit FAQ.
     */
    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    /**
     * Memperbarui FAQ.
     */
    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question'   => 'required|max:255',
            'answer'     => 'required',
            'sort_order' => 'nullable|integer|min:0',
            'is_active'  => 'nullable',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $faq->update($validated);

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'FAQ berhasil diperbarui.');
    }

    /**
     * Menghapus FAQ.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'FAQ berhasil dihapus.');
    }
}