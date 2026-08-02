@extends('layouts.admin')

@section('title', 'Testimoni')

@section('content')

<style>
    /* =========================================
       SERVICE PAGE
    ========================================= */
    .testimonial-avatar{
        width:70px;
        height:70px;
        border-radius:50%;
        overflow:hidden;
        display:flex;
        align-items:center;
        justify-content:center;
    }

    .testimonial-avatar img{
        width:100%;
        height:100%;
        object-fit:cover;
    }

    .avatar-placeholder{
        background:#0d6efd;
        color:#fff;
        font-size:28px;
        font-weight:700;
    }
    .services-page {
        width: 100%;
    }

    /* HEADER */
    .services-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 28px;
    }

    .services-header-left h1 {
        margin: 0 0 7px;
        font-size: 28px;
        font-weight: 700;
        color: #1f2937;
        letter-spacing: -0.5px;
    }

    .services-header-left p {
        margin: 0;
        color: #7b8494;
        font-size: 14px;
    }

    .btn-add-service {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 11px 18px;
        border-radius: 9px;
        background: #1f6feb;
        color: white;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        border: none;
        transition: all 0.2s ease;
        box-shadow: 0 4px 12px rgba(31, 111, 235, 0.18);
    }

    .btn-add-service:hover {
        background: #185abc;
        color: white;
        transform: translateY(-1px);
    }

    /* =========================================
       STAT CARDS
    ========================================= */

    .service-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-bottom: 24px;
    }

    .service-stat-card {
        background: #ffffff;
        border: 1px solid #edf0f4;
        border-radius: 12px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.025);
    }

    .stat-icon {
        width: 46px;
        height: 46px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .stat-icon.total {
        background: #eef5ff;
        color: #1f6feb;
    }

    .stat-icon.active {
        background: #edf9f1;
        color: #22a06b;
    }

    .stat-icon.inactive {
        background: #fff4ed;
        color: #e67e22;
    }

    .stat-info span {
        display: block;
        font-size: 13px;
        color: #7b8494;
        margin-bottom: 4px;
    }

    .stat-info strong {
        display: block;
        font-size: 23px;
        line-height: 1;
        color: #1f2937;
        font-weight: 700;
    }

    /* =========================================
       CONTENT CARD
    ========================================= */

    .services-card {
        background: #ffffff;
        border: 1px solid #edf0f4;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 3px 14px rgba(0, 0, 0, 0.025);
    }

    .services-card-header {
        padding: 21px 24px;
        border-bottom: 1px solid #edf0f4;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .services-card-title h3 {
        margin: 0 0 5px;
        color: #1f2937;
        font-size: 16px;
        font-weight: 700;
    }

    .services-card-title p {
        margin: 0;
        color: #9299a5;
        font-size: 13px;
    }

    /* =========================================
       TABLE
    ========================================= */



    .service-table-wrapper {
        width: 100%;
        overflow-x: auto;
        padding:0 24px 24px;
    }

    .service-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 760px;
    }

    .service-table thead {
        background: #fafbfc;
    }

    .service-table th {
        padding: 14px 20px;
        text-align: left;
        color: #7b8494;
        font-size: 12px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        border-bottom: 1px solid #edf0f4;
        white-space: nowrap;
    }

    .service-table td {
        padding: 10px 10px;
        color: #4b5563;
        font-size: 13px;
        border-bottom: 1px solid #f0f2f5;
        vertical-align: middle;
    }

    .service-table tbody tr {
        transition: background 0.2s ease;
    }

    .service-table tbody tr:hover {
        background: #fafcff;
    }

    .service-table tbody tr:last-child td {
        border-bottom: none;
    }

    .number-cell {
        color: #9aa1ac !important;
        font-weight: 600;
        width: 55px;
    }

    .service-name {
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 190px;
    }

    .service-icon {
        width: 38px;
        height: 38px;
        border-radius: 9px;
        background: #f1f6ff;
        color: #1f6feb;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .service-name strong {
        color: #273142;
        font-size: 13px;
        font-weight: 600;
    }

    .description-cell {
        max-width: 350px;
        color: #7b8494 !important;
        line-height: 1.5;
    }

    /* =========================================
       STATUS
    ========================================= */

    .service-status {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 6px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        white-space: nowrap;
    }

    .service-status.active {
        background: #edf9f1;
        color: #218c5c;
    }

    .service-status.inactive {
        background: #fff1f0;
        color: #d9534f;
    }

    .status-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: currentColor;
    }

    /* =========================================
       ACTION BUTTON
    ========================================= */

    .action-buttons {
        display: flex;
        align-items: center;
        gap: 7px;
        white-space: nowrap;
    }

    .btn-service-action {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 11px;
        border-radius: 7px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        border: 1px solid transparent;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-service-edit {
        color: #1f6feb;
        background: #f2f7ff;
        border-color: #e2edff;
    }

    .btn-service-edit:hover {
        background: #e6f0ff;
        color: #185abc;
    }

    .btn-service-delete {
        color: #d9534f;
        background: #fff5f4;
        border-color: #ffe4e2;
    }

    .btn-service-delete:hover {
        background: #ffebe9;
    }

    /* =========================================
       EMPTY STATE
    ========================================= */

    .service-empty {
        padding: 70px 20px;
        text-align: center;
    }

    .service-empty-icon {
        width: 62px;
        height: 62px;
        margin: 0 auto 16px;
        border-radius: 50%;
        background: #f1f6ff;
        color: #1f6feb;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .service-empty h3 {
        margin: 0 0 7px;
        color: #273142;
        font-size: 16px;
    }

    .service-empty p {
        margin: 0;
        color: #9299a5;
        font-size: 13px;
    }

    /* =========================================
       RESPONSIVE
    ========================================= */

    @media (max-width: 900px) {

        .service-stats {
            grid-template-columns: 1fr;
        }

        .services-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .btn-add-service {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 600px) {

        .services-header-left h1 {
            font-size: 24px;
        }

        .services-card-header {
            padding: 18px;
        }
    }
 
</style>


<div class="services-page">

    {{-- =========================================
         HEADER
    ========================================== --}}

    <div class="services-header">

        <div class="services-header-left">

            <h1>Testimonial</h1>

            <p>
                Kelola testimonial pelanggan.
            </p>

        </div>

        <a href="{{ route('admin.testimonials.create') }}" class="btn-add-service">
            <i class="fas fa-plus"></i>
            Tambah Testimoni
        </a>

    </div>


    {{-- =========================================
         STATISTICS
    ========================================== --}}

    @php
    $totalTestimonials = $testimonials->count();
    $activeTestimonials = $testimonials->where('is_active',true)->count();
    $inactiveTestimonials = $testimonials->where('is_active',false)->count();
    @endphp

    <div class="service-stats">

        {{-- Total --}}
        <div class="service-stat-card">

            <div class="stat-icon total">
                <i class="fas fa-list"></i>
            </div>

            <div class="stat-info">

                <span>Total Testimonial</span>

                <strong>
                    {{ $totalTestimonials }}
                </strong>

            </div>

        </div>


        {{-- Aktif --}}
        <div class="service-stat-card">

            <div class="stat-icon active">
                <i class="fas fa-check-circle"></i>
            </div>

            <div class="stat-info">

                <span>Testimonial Aktif</span>

                <strong>
                    {{ $activeTestimonials }}
                </strong>

            </div>

        </div>


        {{-- Nonaktif --}}
        <div class="service-stat-card">

            <div class="stat-icon inactive">
                <i class="fas fa-pause-circle"></i>
            </div>

            <div class="stat-info">

                <span>Testimonial Nonaktif</span>

                <strong>
                    {{ $inactiveTestimonials }}
                </strong>

            </div>

        </div>

    </div>


    {{-- =========================================
         SERVICE TABLE
    ========================================== --}}

    <div class="services-card">

        <div class="services-card-header">

            <div class="services-card-title">

                <h3>Daftar Testimonial</h3>

                <p>
                    Testimonial yang tersedia.
                </p>

            </div>

        </div>


        @if($testimonials->count() > 0)

            <div class="service-table-wrapper mt-3 mb-3">

                <table class="service-table" id="serviceTable">

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Nama Pelanggan</th>

                            <th>Pekerjaan</th>

                            <th>Testimoni</th>

                            <th>Rating</th>

                            <th>Foto pelanggan</th>

                            <th>Aksi</th>


                        </tr>

                    </thead>
                    <tbody>

                        @foreach($testimonials as $testimonial)

                        <tr>

                            {{-- Nomor --}}
                            <td class="number-cell">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </td>

                            {{-- Nama --}}
                            <td>
                                {{ $testimonial->name }}
                            </td>

                            {{-- Pekerjaan --}}
                            <td>
                                {{ $testimonial->job }}
                            </td>

                            {{-- Testimoni --}}
                            <td class="description-cell">
                                {{ Str::limit($testimonial->message, 80) }}
                            </td>

                            {{-- Rating --}}
                            <td>
                                ⭐ {{ $testimonial->rating }}/5
                            </td>

                            {{-- Foto --}}
                            <td>

                                @if($testimonial->photo)

                                    <img
                                        src="{{ asset('storage/'.$testimonial->photo) }}"
                                        width="50"
                                        style="border-radius:8px;object-fit:cover;"
                                        alt="{{ $testimonial->name }}"
                                        class="testimonial-avatar"
                                    >
                                        

                                @else

                                    <div class="testimonial-avatar avatar-placeholder">
                                        {{ strtoupper(substr($testimonial->name,0,1)) }}
                                    </div>

                                @endif

                            </td>

                            {{-- Aksi --}}
                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="{{ route('admin.testimonials.edit',$testimonial) }}"
                                        class="btn-service-action btn-service-edit">

                                        <i class="fas fa-edit"></i>
                                        Edit

                                    </a>

                                    <a
                                        href="#"
                                        class="btn-service-action btn-service-delete delete-btn"
                                        data-id="{{ $testimonial->id }}"
                                        data-name="{{ $testimonial->name }}">

                                        <i class="fas fa-trash"></i>
                                        Hapus

                                    </a>

                                    <form
                                        id="delete-form-{{ $testimonial->id }}"
                                        action="{{ route('admin.testimonials.destroy',$testimonial) }}"
                                        method="POST"
                                        style="display:none">

                                        @csrf
                                        @method('DELETE')

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <div class="service-empty">

                <div class="service-empty-icon">
                    <i class="fas fa-star"></i>
                </div>

                <h3>Belum ada testimoni</h3>

                <p>
                    Belum ada testimoni pelanggan yang ditambahkan.
                </p>

            </div>

        @endif

    </div>

</div>
<script>
document.querySelectorAll('.delete-btn').forEach(button => {

    button.addEventListener('click', function (e) {

        e.preventDefault();

        const id = this.dataset.id;
        const name = this.dataset.name;

        Swal.fire({
            title: 'Hapus Testimoni?',
            text: `Yakin ingin menghapus "${name}"?`,
            icon: 'warning',
            width: 360,
            showCancelButton: true,
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Batal',
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#6b7280',
            reverseButtons: true,
            focusCancel: true,
        }).then((result) => {

            if(result.isConfirmed){

                document.getElementById('delete-form-'+id).submit();

            }

        });

    });

});
</script>
@endsection