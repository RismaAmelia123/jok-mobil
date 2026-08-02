<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function show(Service $service)
    {
        $service->load('materials');

        return view('services.show', compact('service'));
    }
}