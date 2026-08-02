<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        $materials = [

            [
                // 'service_id' => 1,
                'name' => 'Zeus',
                'type' => 'Sintetis',
                'price' => 3700000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                // 'service_id' => 1,
                'name' => 'Accura / Lederlux Primo',
                'type' => 'Sintetis',
                'price' => 4200000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                // 'service_id' => 1,
                'name' => 'Carviero Alonzo / Napa Prime',
                'type' => 'Sintetis',
                'price' => 4700000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                // 'service_id' => 1,
                'name' => 'MBTech Superior / Camaro',
                'type' => 'Sintetis',
                'price' => 5000000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                // 'service_id' => 1,
                'name' => 'Lederlux Altro / Accura Evo',
                'type' => 'Sintetis',
                'price' => 5300000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                // 'service_id' => 1,
                'name' => 'Vision Lugano',
                'type' => 'Microfiber',
                'price' => 5800000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                // 'service_id' => 1,
                'name' => 'MBTech Carrera',
                'type' => 'Sintetis',
                'price' => 6500000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                // 'service_id' => 1,
                'name' => 'Vision Bugatti',
                'type' => 'Microfiber',
                'price' => 6800000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                // 'service_id' => 1,
                'name' => 'Vision Levante / Euroleder',
                'type' => 'Microfiber',
                'price' => 7200000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                // 'service_id' => 1,
                'name' => 'Articoleder Premium Edition',
                'type' => 'Microfiber',
                'price' => 11000000,
                'image' => 'materials/material.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        foreach (range(1, 9) as $serviceId) {

        foreach ($materials as $material) {

            Material::create([
                'service_id' => $serviceId,
                'name' => $material['name'],
                'type' => $material['type'],
                'price' => $material['price'],
                'image' => $material['image'],
                'is_active' => true,
            ]);

        }

}
    }
}