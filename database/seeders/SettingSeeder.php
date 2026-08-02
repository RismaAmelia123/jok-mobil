<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::updateOrCreate(
        ['id' => 1],
            
        [

            // Informasi Website
            'company_name' => 'Aw Pro Car Interior',

            'logo' => 'settings/logo.png',

            // Hero
            'hero_title' => 'Solusi Interior Mobil Berkualitas & Elegan',

            'hero_subtitle' => 'Percayakan kebutuhan interior mobil Anda kepada tenaga profesional. Kami menyediakan berbagai pilihan bahan berkualitas dengan hasil rapi, nyaman, dan bergaransi.',

            // Tentang Kami
            'about' => 'Jok Mobil Premium merupakan jasa spesialis interior mobil yang melayani pemasangan jok, plafon, doortrim, karpet dasar, hingga custom interior dengan berbagai pilihan bahan berkualitas. Kepuasan pelanggan adalah prioritas utama kami.',

            // Kontak
            'phone' => '6281286109564',

            'email' => 'awprointerior99@gmail.com',

            'address' => 'Jl. Dr. Ciptomangunkusumo, jababeka, cikarang Depan sekolah Al-Azhar, Simpangan, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 09564',

            // Jam Operasional
            'open_days' => 'Senin - Minggu',

            'open_hours' => '08.00 - 20.00 WIB',

            'holiday' => 'Minggu & Hari Libur Nasional',

            // Sosial Media
            'facebook' => 'https://www.facebook.com/share/1MUCNALSPr/',

            'instagram' => 'https://www.instagram.com/awpro_interior?igsh=NDEyeXpqZmQ1djJ4',

            'tiktok' => 'https://www.tiktok.com/@awprointerior?_r=1&_t=ZS-98PAsOxnUvY',

            'youtube' => 'https://youtube.com/@awprointerior?si=MPhg-2spH2jNqSf2',


            // Google Maps
            'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8736857048866!2d107.17415497414864!3d-6.280332193708543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6985c095f51031%3A0xd0c3769dbe3bd1cc!2sAw%20Pro%20Car%20Interior%20%7C%20Salon%20Mobil!5e0!3m2!1sid!2sid!4v1785227106357!5m2!1sid!2sid',

        ]);
    }
}