<section id="faq" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-brand mb-2">FAQ</span>
            <h2 class="fw-bold">Pertanyaan yang Sering Diajukan</h2>
            <p class="text-muted">
                Temukan jawaban atas pertanyaan yang paling sering ditanyakan pelanggan kami.
            </p>
        </div>

        <div class="accordion" id="faqAccordion">
            @forelse($faqs as $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button {{ !$loop->first ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $faq->id }}">{{ $faq->question }}
                        </button>
                    </h2>

                    <div
                        id="faq{{ $faq->id }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">{{ $faq->answer }}</div>
                    </div>
                </div>
            @empty
                <div class="text-center text-muted py-4">Belum ada FAQ yang tersedia.</div>
            @endforelse
        </div>
    </div>
</section>