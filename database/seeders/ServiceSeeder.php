<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Kebutuhan Interior Mobil',
                'slug' => 'kebutuhan-interior-mobil',
                'description' => 'Mengerjakan berbagai kebutuhan interior mobil sesuai dengan kebutuhan dan keinginan pelanggan.',
                'image' => 'services/interior.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cover Jok',
                'slug' => 'cover-jok',
                'description' => 'Pemasangan dan pembuatan cover jok mobil dengan berbagai pilihan bahan dan desain.',
                'image' => 'services/jok-mobil.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cover Steer',
                'slug' => 'cover-steer',
                'description' => 'Pemasangan cover steer untuk meningkatkan kenyamanan dan tampilan interior mobil.',
                'image' => 'services/stir-mobil.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pelapis Plafon',
                'slug' => 'pelapis-plafon',
                'description' => 'Pelapisan plafon mobil untuk memperbarui tampilan dan kenyamanan interior.',
                'image' => 'services/plafon-mobil.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pelapis Dashboard',
                'slug' => 'pelapis-dashboard',
                'description' => 'Pelapisan dashboard mobil dengan material dan desain yang dapat disesuaikan.',
                'image' => 'services/dashboard-mobil.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Door Trim',
                'slug' => 'door-trim',
                'description' => 'Pengerjaan dan pelapisan door trim untuk mempercantik tampilan interior mobil.',
                'image' => 'services/doortrim.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Karpet Dasar',
                'slug' => 'karpet-dasar',
                'description' => 'Pemasangan karpet dasar untuk memberikan perlindungan dan kenyamanan pada interior mobil.',
                'image' => 'services/karpet-dasar.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Peredam Suara',
                'slug' => 'peredam-suara',
                'description' => 'Pemasangan peredam suara untuk membantu mengurangi suara dari luar dan meningkatkan kenyamanan berkendara.',
                'image' => 'services/peredam.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Windows Film',
                'slug' => 'windows-film',
                'description' => 'Pemasangan windows film untuk membantu memberikan kenyamanan dan perlindungan pada kendaraan.',
                'image' => 'services/windows-film.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Service::upsert(
            $services,
            ['slug'],
            [
                'name',
                'description',
                'image',
                'is_active',
                'updated_at'
            ]
        );
    }
}