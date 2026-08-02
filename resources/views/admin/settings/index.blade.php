@extends('layouts.admin')

@section('title', 'Pengaturan Website')

@section('content')

<style>
    /* =========================================
       SERVICE PAGE
    ========================================= */

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
    .settings-content{
    padding:24px;
    }

    .settings-grid{
        display:grid;
        grid-template-columns:repeat(2,1fr);
        gap:20px;
    }

    .setting-card{
        background:#fafbfc;
        border:1px solid #edf0f4;
        border-radius:12px;
        padding:18px;
    }

    .setting-card.full-width{
        grid-column:1 / -1;
    }

    .setting-label{
        display:block;
        font-size:12px;
        color:#7b8494;
        font-weight:600;
        text-transform:uppercase;
        margin-bottom:10px;
        letter-spacing:.3px;
    }

    .setting-value{
        font-size:14px;
        color:#273142;
        font-weight:500;
        line-height:1.7;
        word-break:break-word;
    }

    .setting-logo{
        width:120px;
        border-radius:10px;
        border:1px solid #edf0f4;
    }

    @media(max-width:768px){

        .settings-grid{
            grid-template-columns:1fr;
        }

        .setting-card.full-width{
            grid-column:auto;
        }

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
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        border-bottom: 1px solid #edf0f4;
        white-space: nowrap;
    }

    .service-table td {
        padding: 17px 20px;
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

            <h1>Informasi Website</h1>

            <p>
                 Data yang sedang digunakan pada website.
            </p>

        </div>

        <a href="{{ route('admin.settings.edit') }}" class="btn-add-service">
            <i class="fas fa-plus"></i>
            Edit Pengaturan
        </a>

    </div>
    <div class="settings-content">

        <div class="settings-grid">

            {{-- Logo --}}
            <div class="setting-card">

                <span class="setting-label">
                    Logo Website
                </span>

                <div class="setting-value">

                    @if($setting?->logo)

                        <img src="{{ asset('storage/'.$setting?->logo) }}"
                            class="setting-logo">

                    @else

                        Belum ada logo

                    @endif

                </div>

            </div>

            {{-- Nama Perusahaan --}}
            <div class="setting-card">

                <span class="setting-label">
                    Nama Perusahaan
                </span>

                <div class="setting-value">
                    {{ $setting?->company_name }}
                </div>

            </div>

            {{-- Hero Title --}}
            <div class="setting-card full-width">

                <span class="setting-label">
                    Hero Title
                </span>

                <div class="setting-value">
                    {{ $setting?->hero_title ?: '-' }}
                </div>

            </div>

            {{-- Hero Subtitle --}}
            <div class="setting-card full-width">

                <span class="setting-label">
                    Hero Subtitle
                </span>

                <div class="setting-value">
                    {!! nl2br(e($setting?->hero_subtitle)) !!}
                </div>

            </div>

            {{-- Tentang --}}
            <div class="setting-card full-width">

                <span class="setting-label">
                    Tentang Perusahaan
                </span>

                <div class="setting-value">
                    {!! nl2br(e($setting?->about)) !!}
                </div>

            </div>

            {{-- Nomor HP --}}
            <div class="setting-card">

                <span class="setting-label">
                    Nomor WhatsApp
                </span>

                <div class="setting-value">
                    {{ $setting?->phone ?: '-' }}
                </div>

            </div>

            {{-- Email --}}
            <div class="setting-card">

                <span class="setting-label">
                    Email
                </span>

                <div class="setting-value">
                    {{ $setting?->email ?: '-' }}
                </div>

            </div>

            {{-- Alamat --}}
            <div class="setting-card full-width">

                <span class="setting-label">
                    Alamat
                </span>

                <div class="setting-value">
                    {!! nl2br(e($setting?->address)) !!}
                </div>

            </div>

            {{-- Hari Operasional --}}
            <div class="setting-card">

                <span class="setting-label">
                    Hari Operasional
                </span>

                <div class="setting-value">
                    {{ $setting?->open_days ?: '-' }}
                </div>

            </div>

            {{-- Jam Operasional --}}
            <div class="setting-card">

                <span class="setting-label">
                    Jam Operasional
                </span>

                <div class="setting-value">
                    {{ $setting?->open_hours ?: '-' }}
                </div>

            </div>

            {{-- Hari Libur --}}
            <div class="setting-card">

                <span class="setting-label">
                    Hari Libur
                </span>

                <div class="setting-value">
                    {{ $setting?->holiday ?: '-' }}
                </div>

            </div>

            {{-- Facebook --}}
            <div class="setting-card">

                <span class="setting-label">
                    Facebook
                </span>

                <div class="setting-value">

                    @if($setting?->facebook)

                        <a href="{{ $setting?->facebook }}" target="_blank">
                            {{ $setting?->facebook }}
                        </a>

                    @else

                        -

                    @endif

                </div>

            </div>

            {{-- Instagram --}}
            <div class="setting-card">

                <span class="setting-label">
                    Instagram
                </span>

                <div class="setting-value">

                    @if($setting?->instagram)

                        <a href="{{ $setting?->instagram }}" target="_blank">
                            {{ $setting?->instagram }}
                        </a>

                    @else

                        -

                    @endif

                </div>

            </div>

            {{-- TikTok --}}
            <div class="setting-card">

                <span class="setting-label">
                    TikTok
                </span>

                <div class="setting-value">

                    @if($setting?->tiktok)

                        <a href="{{ $setting?->tiktok }}" target="_blank">
                            {{ $setting?->tiktok }}
                        </a>

                    @else

                        -

                    @endif

                </div>

            </div>

            {{-- Google Maps --}}
            <div class="setting-card full-width">

                <span class="setting-label">
                    Google Maps
                </span>

                <div class="setting-value">

                    @if($setting?->maps)

                        <a href="{{ $setting?->maps }}" target="_blank">

                            {{ $setting?->maps }}

                        </a>

                    @else

                        -

                    @endif

                </div>

            </div>

        </div>

    </div>
</div>
@endsection