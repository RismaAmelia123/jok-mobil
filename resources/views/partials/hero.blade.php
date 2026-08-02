<section id="hero" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <!-- Kiri -->
            <div class="col-lg-6">
                <span class="badge bg-brand mb-3">Spesialis Interior Mobil Premium</span>
                <h1 class="display-4 fw-bold mb-3">{{ $setting?->hero_title }}</h1>
                <p class="text-muted mb-4">{{ $setting?->hero_subtitle }}</p>
                <div class="d-flex gap-3">
                    <a href="#contact" class="btn btn-primary btn-lg">Hubungi Kami</a>
                    <a href="#services" class="btn btn-outline-brand btn-lg">Lihat Layanan</a>
                </div>

                <div class="row mt-5">
                    <div class="col-4">
                        <h3 class="fw-bold text-brand">500+</h3>
                        <small class="text-muted">Pelanggan</small>
                    </div>

                    <div class="col-4">
                        <h3 class="fw-bold text-brand">15+</h3>
                        <small class="text-muted">Tahun Pengalaman</small>
                    </div>

                    <div class="col-4">
                        <h3 class="fw-bold text-brand">100%</h3>
                        <small class="text-muted">Garansi Kepuasan</small>
                    </div>
                </div>
            </div>

            <!-- Kanan -->
            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($services as $index => $service)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/'.$service->image) }}" class="d-block w-100 hero-image" alt="{{ $service->title }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>