<style>
    .service-card-img{
    width: 100%;
    height: 240px;          /* semua gambar tingginya sama */
    overflow: hidden;
    border-radius: .5rem .5rem 0 0;
    background: #f5f5f5;
}

.service-card-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: .3s;
}

.card:hover .service-card-img img{
    transform: scale(1.05);
}
</style>
<section id="services" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-brand mb-2">Layanan Kami</span>
            <h2 class="fw-bold">Layanan Terbaik Untuk Interior Mobil Anda</h2>
            <p class="text-muted">Kami menyediakan berbagai layanan interior mobil dengan kualitas terbaik dan pengerjaan yang profesional.</p>
        </div>

        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="service-card-img">
                    @if($service->image)
                        <img src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->name }}">
                    @else
                        <img src="{{ asset('images/no-image.jpg') }}" alt="No Image">
                    @endif
                </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">{{ $service->name }}</h4>
                        <p class="card-text text-muted">{{ $service->description }}</p>
                        <a href="{{ route('services.show', $service->slug) }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>