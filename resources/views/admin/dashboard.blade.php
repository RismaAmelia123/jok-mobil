@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

    <!-- HEADER -->

    <div class="mb-4">

        <h1 class="page-title">
            Dashboard
        </h1>

        <p class="page-subtitle">
            Selamat datang kembali, {{ session('admin_name') }} 👋
        </p>

    </div>


    <!-- STATISTIK -->

    <div class="row g-4">


        <!-- LAYANAN -->

        <div class="col-md-4">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-start">

                    <div>

                        <p class="stat-label">
                            Total Layanan
                        </p>

                        <h3 class="stat-number">
                            {{ $totalServices }}
                        </h3>

                    </div>


                    <div class="stat-icon">

                        <i class="bi bi-car-front-fill"></i>

                    </div>

                </div>

            </div>

        </div>


        <!-- GALERI -->

        <div class="col-md-4">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-start">

                    <div>

                        <p class="stat-label">
                            Total Galeri
                        </p>

                        <h3 class="stat-number">
                            {{ $totalGallery }}
                        </h3>

                    </div>


                    <div class="stat-icon">

                        <i class="bi bi-images"></i>

                    </div>

                </div>

            </div>

        </div>
         <!-- MATERIAL -->
        <div class="col-md-4">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-start">

                    <div>

                        <p class="stat-label">
                            Total Bahan Interior
                        </p>

                        <h3 class="stat-number">
                            {{ $totalMaterials }}
                        </h3>

                    </div>


                    <div class="stat-icon">

                        <i class="bi bi-box-seam-fill"></i>

                    </div>

                </div>

            </div>

        </div>
        
        <!-- TESTIMONI -->
        <div class="col-md-4">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="stat-label">
                            Total Testimoni
                        </p>
                        <h3 class="stat-number">
                            {{ $totalTestimonials }}
                        </h3>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
            </div>
        </div>

                <div class="col-md-4">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-start">

                    <div>

                        <p class="stat-label">
                            Total FAQ
                        </p>

                        <h3 class="stat-number">
                            {{ $totalFaq }}
                        </h3>

                    </div>


                    <div class="stat-icon">

                        <i class="fa fa-question-circle"></i>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- WELCOME CARD -->
    <div class="content-card mt-4">
        <div class="content-card-header">
            <h5 class="fw-semibold mb-1">
                Kelola Website {{ $setting?->company_name }}
            </h5>
            <p class="text-muted mb-0 small">
                Panel administrasi untuk mengelola konten website.
            </p>
        </div>
        <div class="content-card-body">
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="{{ route('admin.services.index') }}" class="text-decoration-none text-dark">
                    <div class="d-flex gap-3">
                        <div class="stat-icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">
                                Layanan
                            </h6>
                            <p class="text-muted small mb-0">
                                Kelola daftar layanan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('admin.galleries.index') }}" class="text-decoration-none text-dark">
                    <div class="d-flex gap-3">
                        <div class="stat-icon">
                            <i class="bi bi-images"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">
                                    Galeri   
                            </h6>
                            <p class="text-muted small mb-0">
                                Kelola foto hasil pengerjaan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('admin.testimonials.index') }}" class="text-decoration-none text-dark">
                    <div class="d-flex gap-3">
                        <div class="stat-icon">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">
                                    Testimoni
                            </h6>
                            <p class="text-muted small mb-0">
                                Kelola testimoni pelanggan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection