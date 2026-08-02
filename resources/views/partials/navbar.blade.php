<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold text-primary" href="#">
            <img src="{{ asset('storage/'.$setting?->logo) }}" class="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse show" id="navbarMenu">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#services">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#gallery">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#testimonial">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#contact">Kontak</a>
                </li>
            </ul>

            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting?->phone) }}" target="_blank" class="btn btn-primary"><i class="fab fa-whatsapp me-2"></i>Hubungi Kami</a>
        </div>
    </div>
</nav>