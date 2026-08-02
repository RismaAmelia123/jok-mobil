# 🚗 Website Jasa Interior  Mobil

Website Company Profile untuk jasa interior mobil yang dibangun menggunakan **Laravel 12**. Website ini memiliki halaman frontend untuk pelanggan dan halaman admin untuk mengelola seluruh konten website.

---

# 📌 Fitur

## Frontend
- Home
- Tentang Kami
- Daftar Layanan
- Detail Layanan
- Galeri
- Testimoni
- FAQ
- Kontak
- Integrasi WhatsApp
- Google Maps

## Admin Panel
- Login Admin
- Dashboard
- Kelola Layanan
- Kelola Material
- Kelola Galeri
- Kelola Testimoni
- Kelola FAQ
- Kelola Pengaturan Website
- Kelola Profil Admin

---

# 🛠 Teknologi

- Laravel 12
- PHP 8.2+
- MySQL
- Bootstrap 5
- Blade Template
- SweetAlert2
- DataTables
- Font Awesome

---

# 📂 Struktur Folder

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
```

---

# ⚙️ Cara Menjalankan Project

## 1. Clone Repository

```bash
git clone https://github.com/USERNAME/NAMA-REPOSITORY.git
```

Masuk ke folder project

```bash
cd NAMA-REPOSITORY
```

---

## 2. Install Dependency

```bash
composer install
```

---

## 3. Copy File Environment

```bash
cp .env.example .env
```

Jika menggunakan Windows

```bash
copy .env.example .env
```

---

## 4. Generate Application Key

```bash
php artisan key:generate
```

---

## 5. Buat Database

Buat database baru di MySQL, misalnya:

```
project
```

Lalu ubah konfigurasi pada file `.env`

```env
DB_DATABASE=project
DB_USERNAME=root
DB_PASSWORD=
```

---

## 6. Jalankan Migration

```bash
php artisan migrate
```

---

## 7. Jalankan Seeder

```bash
php artisan db:seed
```

Atau jika ingin menjalankan ulang seluruh database

```bash
php artisan migrate:fresh --seed
```

---

## 8. Storage Link

Agar gambar dapat tampil jalankan

```bash
php artisan storage:link
```

---

## 9. Jalankan Website

```bash
php artisan serve
```

Buka browser

```
http://127.0.0.1:8000
```

---

# 🔐 Login Admin

Masuk ke

```
http://127.0.0.1:8000/admin/login
```

Gunakan akun admin yang telah dibuat melalui Seeder atau database.

---

# 📸 Menambahkan Gambar

Semua gambar disimpan pada

```
storage/app/public
```

Contoh:

```
storage/app/public/services
storage/app/public/materials
storage/app/public/galleries
storage/app/public/settings
storage/app/public/testimonials
```

Setelah menambahkan gambar jalankan

```bash
php artisan storage:link
```

jika folder `public/storage` belum tersedia.

---

# 📋 Seeder

Project ini menggunakan beberapa seeder:

- AdminSeeder
- ServiceSeeder
- MaterialSeeder
- GallerySeeder
- TestimonialSeeder
- FaqSeeder
- SettingSeeder

---

# 📱 Fitur Website

✔ Responsive Design

✔ CRUD Layanan

✔ CRUD Material

✔ CRUD Galeri

✔ CRUD Testimoni

✔ CRUD FAQ

✔ Pengaturan Website

✔ Dashboard Admin

✔ Login Admin

✔ WhatsApp Integration

✔ Google Maps

---

# 👨‍💻 Developer

Dibuat oleh:

**Risma & Arafah**

