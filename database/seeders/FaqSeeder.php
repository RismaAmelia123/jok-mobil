<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [

            [
                'question' => 'Berapa lama proses pengerjaan interior mobil?',
                'answer' => 'Lama pengerjaan berkisar antara 1 hingga 5 hari, tergantung jenis layanan dan tingkat kesulitan pekerjaan.',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'question' => 'Apakah tersedia pilihan bahan dan warna?',
                'answer' => 'Ya. Kami menyediakan berbagai pilihan bahan seperti sintetis dan microfiber dengan beragam warna serta motif yang dapat disesuaikan dengan kebutuhan pelanggan.',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'question' => 'Apakah ada garansi untuk hasil pengerjaan?',
                'answer' => 'Tentu. Kami memberikan garansi pengerjaan dan garansi bahan sesuai dengan ketentuan yang berlaku agar pelanggan merasa lebih aman dan nyaman.',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'question' => 'Bagaimana cara melakukan reservasi?',
                'answer' => 'Reservasi dapat dilakukan melalui WhatsApp, telepon, atau datang langsung ke workshop kami untuk berkonsultasi terlebih dahulu.',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'question' => 'Apakah bisa memilih desain custom?',
                'answer' => 'Bisa. Pelanggan bebas menentukan kombinasi warna, pola jahitan, jenis bahan, hingga desain sesuai keinginan.',
                'sort_order' => 5,
                'is_active' => true,
            ],




        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}