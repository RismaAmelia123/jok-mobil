<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        Testimonial::insert([

            [
                'name' => 'Budi Santoso',
                'job' => 'Pegawai Swasta',
                'message' => 'Hasil pemasangan jok sangat rapi dan nyaman. Bahannya juga berkualitas, mobil jadi terasa seperti baru lagi.',
                'photo' => null,
                'rating' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Rina Amelia',
                'job' => 'Wirausaha',
                'message' => 'Pelayanannya ramah, pengerjaan cepat, dan hasilnya sesuai dengan yang saya inginkan. Sangat puas.',
                'photo' => null,
                'rating' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Andi Pratama',
                'job' => 'Karyawan',
                'message' => 'Pilihan bahannya lengkap dan kualitas jahitannya sangat bagus. Interior mobil jadi lebih elegan.',
                'photo' => null,
                'rating' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Dewi Lestari',
                'job' => 'Dokter',
                'message' => 'Awalnya ragu, tapi ternyata hasilnya jauh di atas ekspektasi. Sangat direkomendasikan.',
                'photo' => null,
                'rating' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Rahmat Hidayat',
                'job' => 'Pengusaha',
                'message' => 'Harga sesuai dengan kualitas. Jok mobil terasa lebih nyaman dipakai untuk perjalanan jauh.',
                'photo' => null,
                'rating' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Siti Nurhaliza',
                'job' => 'Guru',
                'message' => 'Warna dan bahan sesuai pilihan saya. Hasil akhirnya sangat memuaskan dan terlihat premium.',
                'photo' => null,
                'rating' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}