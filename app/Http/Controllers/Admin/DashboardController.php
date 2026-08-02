<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Material;
use App\Models\Setting;

class DashboardController extends Controller
{
        public function index()
    {
        return view('admin.dashboard', [
            'totalServices'     => Service::count(),
            'totalMaterials'    => Material::count(),
            'totalGallery'      => Gallery::count(),
            'totalTestimonials' => Testimonial::count(),
            'totalFaq'          => Faq::count(),
        ]);
    }

}