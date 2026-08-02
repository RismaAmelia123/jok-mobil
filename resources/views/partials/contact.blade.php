<section id="contact" class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <span class="badge bg-brand mb-2">Hubungi Kami</span>
            <h2 class="fw-bold">Siap Membantu Anda</h2>
            <p class="text-muted">Hubungi kami untuk konsultasi, pemesanan, atau informasi lebih lanjut.</p>
        </div>

        <div class="row g-4">

            <!-- Informasi -->
            <div class="col-lg-5">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h4 class="fw-bold mb-4">Informasi Kontak</h4>

                        <div class="mb-4">
                            <h6 class="fw-bold">📍 Alamat</h6>
                            <p class="text-muted mb-0">{{ $setting?->address }}</p>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold">📞 Telepon</h6>
                            <p class="text-muted mb-0">{{ $setting?->phone }}</p>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold">✉ Email</h6>
                            <p class="text-muted mb-0"> {{ $setting?->email }}</p>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold">🕒 Jam Operasional</h6>
                            <p class="text-muted mb-0">
                                {{ $setting?->open_days }}<br>
                                {{ $setting?->open_hours }}
                            </p> 
                        </div>
                        <div class="mb-4">
                            <h6 class="fw-bold">🕒 Hari Libur</h6>
                            <p class="text-muted mb-0">{{ $setting?->holiday }}</p>
                        </div><hr>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting?->phone) }}"
                            target="_blank" class="btn btn-success w-100"><i class="fab fa-whatsapp me-2"></i>Chat WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-2">
                        <iframe
                            src="{{ $setting?->maps }}" width="100%" height="570" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>