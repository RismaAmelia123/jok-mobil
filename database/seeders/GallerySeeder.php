<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $galleries = [

            [
                'service_id' => 1,
                'title' => 'Hasil Pengerjaan Interior Mobil',
                'image' => 'galleries/interior.png',
                'is_active' => true,
            ],

            [
                'service_id' => 2,
                'title' => 'Cover Jok Premium',
                'image' => 'galleries/jok.png',
                'is_active' => true,
            ],

            [
                'service_id' => 4,
                'title' => 'Pelapis Plafon Mobil',
                'image' => 'galleries/plafon.png',
                'is_active' => true,
            ],

            [
                'service_id' => 5,
                'title' => 'Pelapis Dashboard',
                'image' => 'galleries/dashboard.png',
                'is_active' => true,
            ],

            [
                'service_id' => 6,
                'title' => 'Door Trim Elegan',
                'image' => 'galleries/doortrim.png',
                'is_active' => true,
            ],

            [
                'service_id' => 7,
                'title' => 'Karpet Dasar Custom',
                'image' => 'galleries/karpet.png',
                'is_active' => true,
            ],

            [
                'service_id' => 8,
                'title' => 'Pemasangan Peredam Suara',
                'image' => 'galleries/peredam.png',
                'is_active' => true,
            ],

            [
                'service_id' => 2,
                'title' => 'Detail Jahitan Jok Premium',
                'image' => 'galleries/jahit-jok.png',
                'is_active' => true,
            ],

        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}