@php
use Illuminate\Support\Str;
@endphp
<footer class="bg-brand text-white pt-5 pb-3">

    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-lg-4 mb-4">
                <h3 class="fw-bold">{{ $setting?->company_name }}</h3>
                <p class="text-white-50">{{ Str::limit($setting?->about, 150) }}</p>
            </div>

            <!-- Menu -->
            <div class="col-lg-4 mb-4">
                <h5 class="fw-bold">Menu</h5>
                <ul class="list-unstyled">
                    <li><a href="#hero" class="text-white-50 text-decoration-none">Home</a></li>
                    <li><a href="#about" class="text-white-50 text-decoration-none">Tentang</a></li>
                    <li><a href="#services" class="text-white-50 text-decoration-none">Layanan</a></li>
                    <li><a href="#gallery" class="text-white-50 text-decoration-none">Galeri</a></li>
                    <li><a href="#contact" class="text-white-50 text-decoration-none">Kontak</a></li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div class="col-lg-4 mb-4">
                <h5 class="fw-bold">Ikuti Kami</h5>
                <p>
                    @if($setting?->facebook)
                    <a href="{{ $setting?->facebook }}" class="text-white-50 text-decoration-none d-flex align-items-center gap-2" target="_blank"><i class="bi bi-facebook"></i><span>Facebook</span></a>
                    @endif
                    @if($setting?->instagram)
                    <a href="{{ $setting?->instagram }}"class="text-white-50 text-decoration-none d-flex align-items-center gap-2" target="_blank""><i class="bi bi-instagram"></i><span>Instagram</span></a>
                    @endif
                    @if($setting?->tiktok)
                    <a href="{{ $setting?->tiktok }}"class="text-white-50 text-decoration-none d-flex align-items-center gap-2" target="_blank""><i class="bi bi-tiktok"></i><span>Tiktok</span></a>
                    @endif
                    @if($setting?->youtube)
                    <a href="https://youtube.com/@awprointerior?si=MPhg-2spH2jNqSf2" class="text-white-50 text-decoration-none d-flex align-items-center gap-2" target="_blank""><i class="bi bi-youtube"></i><span>Youtube</span></a>
                    @endif
                </p>
            </div>
        </div>
        <hr>

        <div class="text-center">
            <p class="mb-1 text-white-50"> © {{ date('Y') }} {{ $setting?->company_name }}. All Rights Reserved.</p>
            <small class="text-white-50">
                Website developed by
                <span class="text-white-50">Risma</span>
                &
                <span class="text-white-50">Arafah</span>
            </small>
        </div>
    </div>
</footer>