<style>
.testimonial-avatar{
    width:70px;
    height:70px;
    border-radius:50%;
    overflow:hidden;
    flex-shrink:0;

    display:flex;
    justify-content:center;
    align-items:center;

    margin-right:18px;
}

.testimonial-avatar img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.avatar-placeholder{
    color:#fff;
    font-size:28px;
    font-weight:700;
}
</style>

<section id="testimonial" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-brand mb-2">Testimoni</span>
            <h2 class="fw-bold">Apa Kata Pelanggan Kami</h2>
            <p class="text-muted">Kepuasan pelanggan adalah prioritas utama kami.</p>
        </div>

        <div class="row g-4">

            @forelse($testimonials as $testimonial)
            @php
                $colors = [
                    '#0d6efd',
                    '#198754',
                    '#dc3545',
                    '#fd7e14',
                    '#6f42c1',
                    '#20c997',
                ];

                $color = $colors[crc32($testimonial->name) % count($colors)];
            @endphp

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                @if($testimonial->photo)
                                    <img src="{{ asset('storage/'.$testimonial->photo) }}" alt="{{ $testimonial->name }}" class="testimonial-avatar rounded-circle">
                                @else
                                    <div class="testimonial-avatar avatar-placeholder" style="background: {{ $color }};">
                                        {{ strtoupper(substr($testimonial->name,0,1)) }}
                                    </div>
                                @endif
                                <div>
                                    <h5 class="mb-0">{{ $testimonial->name }}</h5>
                                    @if($testimonial->job)
                                        <small class="text-muted">{{ $testimonial->job }}</small>
                                    @endif
                                </div>
                            </div>
                            <p class="text-muted fst-italic">"{{ $testimonial->message }}"</p>
                            <div class="text-warning">

                                @for($i=1;$i<=5;$i++)

                                    @if($i <= $testimonial->rating)
                                        ★
                                    @else
                                        ☆
                                    @endif

                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-secondary text-center">Belum ada testimonial.</div>
                </div>
            @endforelse
        </div>
    </div>
</section>