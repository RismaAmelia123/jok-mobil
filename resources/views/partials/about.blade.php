<section id="about" class="py-5">
    <div class="container">

        <div class="row align-items-center">
            <!-- Gambar -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ $aboutImage }}" alt="Tentang Kami" style="width:100%; height:420px; object-fit:cover;">
            </div>

            <!-- Deskripsi -->
            <div class="col-lg-6">
                <span class="badge bg-brand mb-3">Tentang Kami</span>
                <h2 class="fw-bold mb-4"> {{ $setting?->company_name }}</h2>
                <p class="text-muted">{{ $setting?->about }}</p>
                <div class="row mt-4">
                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3 fs-3 text-brand">✓</div>
                            <div>
                                <h6 class="mb-1 fw-bold">Bahan Premium</h6>
                                <small class="text-muted">Material berkualitas tinggi.</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3 fs-3 text-brand">✓</div>
                            <div>
                                <h6 class="mb-1 fw-bold">Teknisi Ahli</h6>
                                <small class="text-muted">Berpengalaman dan profesional.</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3 fs-3 text-brand">✓</div>
                            <div>
                                <h6 class="mb-1 fw-bold">Garansi</h6>
                                <small class="text-muted">Pengerjaan bergaransi.</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3 fs-3 text-primary">✓</div>
                            <div>
                                <h6 class="mb-1 fw-bold">Harga Terjangkau</h6>
                                <small class="text-muted">Kualitas terbaik dengan harga bersaing.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#services" class="btn btn-primary mt-3">Lihat Layanan</a>
            </div>

        </div>
    </div>
</section>