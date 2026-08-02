<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Setting;
use App\Models\Faq;

class FrontendController extends Controller
{
    /**
     * Halaman Home
     */
    public function home()
    {
        $setting = Setting::first();

        $services = Service::where('is_active', true)
            ->latest()
            ->get();

        $galleries = Gallery::with('service')
            ->where('is_active', true)
            ->latest()
            ->get();

        $testimonials = Testimonial::where('is_active', true)
            ->latest()
            ->get();
        
        $faqs = Faq::where('is_active', 1)->get(); // atau Faq::all()

        // gambar tentang kami
        $aboutImage = null;

        if ($setting && $setting->logo) {
            $aboutImage = asset('storage/' . $setting->logo);
        } elseif ($galleries->count()) {
            $aboutImage = asset('storage/' . $galleries->first()->image);
        } else {
            $aboutImage = asset('images/about.jpg');
        }

        return view('home', compact(
            'services',
            'galleries',
            'testimonials',
            'setting',
            'aboutImage',
            'faqs'
        ));
    }

    /**
     * Halaman Detail Layanan
     */
    public function show($slug)
    {
        // Pengaturan Website
        $setting = Setting::first();

        // Detail layanan
        $service = Service::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Material layanan
        $materials = $service->materials()
            ->where('is_active', true)
            ->get();

        // Galeri
        $galleries = Gallery::where('is_active', true)
            ->latest()
            ->get();

        return view('services.show', compact(
            'setting',
            'service',
            'materials',
            'galleries',
            
        ));
    }
    
}