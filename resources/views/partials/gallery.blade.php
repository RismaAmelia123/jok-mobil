<section id="gallery" class="py-5 bg-white">
    <div class="container">

        <!-- Judul -->
        <div class="text-center mb-5">
            <span class="badge bg-brand mb-2">Galeri Kami</span>
            <h2 class="fw-bold">Hasil Pengerjaan Kami</h2>
            <p class="text-muted">Berikut beberapa dokumentasi hasil pengerjaan interior mobil yang telah kami kerjakan.</p>
        </div>

        <div class="row g-4">
            @forelse($galleries as $gallery)
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        @if($gallery->image)
                            <img src="{{ asset('storage/'.$gallery->image) }}" class="img-fluid rounded shadow" alt="{{ $gallery->title }}">
                        @else
                            <img src="{{ asset('images/no-image.jpg') }}" class="img-fluid rounded shadow" alt="No Image">
                        @endif

                        <div class="mt-3 text-center">
                            <h5 class="fw-bold">{{ $gallery->title }}</h5>
                            <small class="text-muted">{{ $gallery->service->name }}</small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-secondary text-center">Belum ada galeri yang ditambahkan.</div>
                </div>
            @endforelse
        </div>
    </div>
</section>