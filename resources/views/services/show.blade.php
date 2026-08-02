@extends('layouts.app')

@section('title', $service->name)

@section('content')

<style>
.material-image{
    height:220px;
    object-fit:cover;
}
.service-image{
    width:100%;
    max-width:500px;
    height:330px;
}
.service-image img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.service-image:hover img{
    transform:scale(1.05);
}
.gallery-image{
    width:100%;
    height:250px;
    object-fit:cover;
    border-radius:12px;
    transition:.3s;
}

.gallery-image:hover{
    transform:scale(1.03);
}
</style>

<!-- Banner -->
<section class="py-5 bg-brand text-white">
    <div class="container">
        <div class="text-center">
            <h1 class="display-5 fw-bold">{{ $service->name }}</h1>
            <p class="lead">{{ $service->description }}</p>
        </div>
    </div>
</section>

<!-- Detail -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            {{-- Gambar --}}
            <div class="col-lg-6 mb-4">
                <div class="service-image">
                    @if($service->image)
                        <img
                            src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->name }}">
                    @else
                        <img
                            src="{{ asset('images/no-image.jpg') }}" alt="No Image">
                    @endif
                </div>
            </div>

            {{-- Deskripsi --}}
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">{{ $service->name }}</h2>
                <p class="text-muted">{{ $service->description }}</p>

                <ul class="list-group list-group-flush mb-4">

                    <li class="list-group-item">
                        <a5 class="me-3 fs-3 text-brand">✓</a5>Bahan Premium
                    </li>

                    <li class="list-group-item">
                        <a5 class="me-3 fs-3 text-brand">✓</a5>Garansi Bahan
                    </li>

                    <li class="list-group-item">
                        <a5 class="me-3 fs-3 text-brand">✓</a5>Banyak Pilihan Warna
                    </li>

                    <li class="list-group-item">
                        <a5 class="me-3 fs-3 text-brand">✓</a5>Garansi Pengerjaan
                    </li>

                    <li class="list-group-item">
                        <a5 class="me-3 fs-3 text-brand">✓</a5>Teknisi Berpengalaman
                    </li>

                </ul>
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting?->phone) }}" target="_blank" class="btn btn-success btn-lg"><i class="fab fa-whatsapp me-2"></i>Konsultasi sekarang</a>
            </div>
        </div>
    </div>
</section>

<!-- Jenis Bahan -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Pilihan Bahan </h2>
            <p class="text-muted">Pilih material sesuai kebutuhan dan budget Anda.</p>
        </div>

        <div class="row g-4">
            @forelse($materials as $material)
                <div class="col-md-4">

                    <div class="card h-100 shadow-sm">
                        @if($material->image)
                            <img src="{{ asset('storage/'.$material->image) }}" class="card-img-top material-image" alt="{{ $material->name }}">
                        @else
                            <img src="{{ asset('images/no-image.jpg') }}" class="card-img-top" alt="No Image" style="height:220px; object-fit:cover;">
                        @endif

                        <div class="card-body">
                            <h4 class="fw-bold">{{ $material->name }}</h4>
                            <p class="text-muted">Jenis : {{ $material->type }}</p>
                            <h5 class="text-brand"> Rp. {{ number_format($material->price,0,',','.') }}</h5>
                        </div>
                    </div>
                </div>
            @empty

                <div class="col-12">
                    <div class="alert alert-secondary text-center">Belum ada bahan untuk layanan ini.</div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Galeri -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Hasil Pengerjaan</h2>
        </div>

        <div class="row g-4">
            @forelse($galleries as $gallery)
            <div class="col-md-4">
                <img src="{{ asset('storage/'.$gallery->image) }}" class="gallery-image shadow" alt="{{ $gallery->title }}">
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-secondary">Belum ada galeri untuk layanan ini.</div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-5 bg-brand text-white">
    <div class="container text-center">
        <h2 class="fw-bold">Siap Mempercantik {{ $service?->name }} Mobil Anda?</h2>
        <p>Hubungi kami sekarang untuk konsultasi gratis.</p>
        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting?->phone) }}" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp me-2"></i>Hubungi via WhatsApp</a>
    </div>
</section>

@endsection