@extends('layouts.admin')

@section('title', 'Informasi Website')

@section('content')

<style>
    .service-form-page {
        width: 100%;
    }

    .service-form-header {
        margin-bottom: 25px;
    }

    .service-form-header h1 {
        margin: 0 0 7px;
        font-size: 28px;
        font-weight: 700;
        color: #1f2937;
        letter-spacing: -0.5px;
    }

    .service-form-header p {
        margin: 0;
        color: #7b8494;
        font-size: 14px;
    }

    .service-form-card {
        background: #ffffff;
        border: 1px solid #edf0f4;
        border-radius: 14px;
        box-shadow: 0 3px 14px rgba(0, 0, 0, 0.025);
        overflow: hidden;
        max-width: 900px;
    }
    .form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:22px;
    }

    .form-group.full{
        grid-column:1 / -1;
    }

    .current-image{
        margin-bottom:15px;
    }

    .current-image img{
        width:100%;
        max-width:250px;
        border-radius:10px;
        border:1px solid #e5e7eb;
    }

    @media(max-width:768px){

        .form-grid{
            grid-template-columns:1fr;
        }

    }
    .row{
    display:flex;
    flex-wrap:wrap;
    margin:-10px;
    }

    .col-md-6{
        width:50%;
        padding:10px;
        box-sizing:border-box;
    }

    @media(max-width:768px){
        .col-md-6{
            width:100%;
        }
    }

    .form-card-header {
        padding: 21px 25px;
        border-bottom: 1px solid #edf0f4;
    }

    .form-card-header h3 {
        margin: 0 0 5px;
        color: #273142;
        font-size: 16px;
        font-weight: 700;
    }

    .form-card-header p {
        margin: 0;
        color: #9299a5;
        font-size: 13px;
    }

    .service-form {
        padding: 25px;
    }

    .form-group {
        margin-bottom: 21px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        color: #374151;
        font-size: 13px;
        font-weight: 600;
    }

    .required {
        color: #d9534f;
    }

    .form-control {
        width: 100%;
        box-sizing: border-box;
        padding: 11px 13px;
        border: 1px solid #dfe3e8;
        border-radius: 8px;
        background: #ffffff;
        color: #273142;
        font-family: inherit;
        font-size: 13px;
        outline: none;
        transition: all 0.2s ease;
    }

    .form-control:focus {
        border-color: #1f6feb;
        box-shadow: 0 0 0 3px rgba(31, 111, 235, 0.08);
    }

    textarea.form-control {
        min-height: 130px;
        resize: vertical;
        line-height: 1.6;
    }

    .form-help {
        margin-top: 6px;
        color: #9299a5;
        font-size: 12px;
    }

    .form-error {
        margin-top: 6px;
        color: #d9534f;
        font-size: 12px;
    }

    .image-upload {
        border: 1px dashed #d7dce3;
        border-radius: 10px;
        padding: 20px;
        background: #fafbfc;
    }

    .current-image {
        margin-bottom: 15px;
    }

    .current-image img {
        width: 150px;
        height: 100px;
        object-fit: cover;
        border-radius: 9px;
        border: 1px solid #e5e7eb;
    }

    .current-image p {
        margin: 7px 0 0;
        color: #9299a5;
        font-size: 12px;
    }

    .image-upload input {
        width: 100%;
        font-size: 13px;
        color: #6b7280;
    }

    .status-box {
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 13px 15px;
        border: 1px solid #edf0f4;
        border-radius: 9px;
        background: #fafbfc;
    }

    .status-box input {
        width: 17px;
        height: 17px;
        accent-color: #1f6feb;
        cursor: pointer;
    }

    .status-box label {
        color: #374151;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
    }

    .form-actions {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 10px;
        padding-top: 5px;
    }

    .btn-cancel,
    .btn-save {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 10px 17px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-cancel {
        color: #6b7280;
        background: #f5f6f8;
        border: 1px solid #e8eaed;
    }

    .btn-cancel:hover {
        background: #eceef1;
        color: #374151;
    }

    .btn-save {
        color: #ffffff;
        background: #1f6feb;
        border: 1px solid #1f6feb;
        box-shadow: 0 4px 12px rgba(31, 111, 235, 0.16);
    }

    .btn-save:hover {
        background: #185abc;
        border-color: #185abc;
    }

    .alert-error {
        margin-bottom: 22px;
        padding: 13px 15px;
        border-radius: 9px;
        background: #fff5f4;
        border: 1px solid #ffe1df;
        color: #c2413d;
        font-size: 13px;
    }

    .alert-error ul {
        margin: 6px 0 0 18px;
        padding: 0;
    }

    @media (max-width: 600px) {

        .service-form-header h1 {
            font-size: 24px;
        }

        .service-form {
            padding: 18px;
        }

        .form-actions {
            flex-direction: column-reverse;
        }

        .btn-cancel,
        .btn-save {
            width: 100%;
        }
    }
</style>


<div class="service-form-page">

    {{-- Header --}}
    <div class="service-form-header">

        <h1>Pengaturan Website</h1>

        <p>
            Perbarui informasi website.
        </p>

    </div>


    {{-- Error --}}
    @if ($errors->any())

        <div class="alert-error">

            <strong>
                Terdapat kesalahan pada input:
            </strong>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif
    <form
    action="{{ route('admin.settings.update', $setting) }}"
    method="POST"
    enctype="multipart/form-data"
    class="service-form"
>

    @csrf
    @method('PUT')

    <div class="row">
    {{-- <hr style="margin:30px 0;border:none;border-top:1px solid #edf0f4;"> --}}

        <!-- ================= LEFT ================= -->
        <div class="col-md-6">

            {{-- Nama Perusahaan --}}
            <div class="form-group">
                <label class="form-label">
                    Nama Perusahaan
                </label>

                <input
                    type="text"
                    name="company_name"
                    class="form-control"
                    value="{{ old('company_name', $setting->company_name) }}"
                >
            </div>
                        <div class="form-group">

                <label class="form-label">
                    Logo Website
                </label>

                @if($setting->logo)

                    <div class="current-image">

                        <img src="{{ asset('storage/'.$setting->logo) }}">

                    </div>

                @endif

                <input
                    type="file"
                    name="logo"
                    class="form-control"
                >

            </div>

            {{-- Hero Title --}}
            <div class="form-group">
                <label class="form-label">
                    Hero Title
                </label>

                <input
                    type="text"
                    name="hero_title"
                    class="form-control"
                    value="{{ old('hero_title', $setting->hero_title) }}"
                >
            </div>

            {{-- Hero Subtitle --}}
            <div class="form-group">
                <label class="form-label">
                    Hero Subtitle
                </label>

                <textarea
                    name="hero_subtitle"
                    class="form-control"
                    rows="4"
                >{{ old('hero_subtitle', $setting->hero_subtitle) }}</textarea>
            </div>

            {{-- Tentang --}}
            <div class="form-group">
                <label class="form-label">
                    Tentang Perusahaan
                </label>

                <textarea
                    name="about"
                    class="form-control"
                    rows="6"
                >{{ old('about', $setting->about) }}</textarea>
            </div>
            <div class="form-group">

                    <label class="form-label">
                        Facebook
                    </label>

                    <input
                        type="text"
                        name="facebook"
                        class="form-control"
                        placeholder="Contoh: jokmobil atau https://facebook.com/jokmobil"
                        value="{{ old('facebook', $setting->facebook) }}"
                    >
                        <small class="form-help">
                            Bisa diisi username atau link lengkap Facebook.
                        </small>

                </div>

            <div class="form-group">

                <label class="form-label">
                    Instagram
                </label>

                <input
                    type="text"
                    name="instagram"
                    class="form-control"
                    placeholder="Contoh: jokmobil atau https://facebook.com/jokmobil"
                    value="{{ old('instagram', $setting->instagram) }}"
                >
                    <small class="form-help">
                        Bisa diisi username atau link lengkap Facebook.
                    </small>
            </div>

        </div>


        <!-- ================= RIGHT ================= -->
        <div class="col-md-6">

            {{-- WhatsApp --}}
            <div class="form-group">
                <label class="form-label">
                    Nomor WhatsApp
                </label>

                <input
                    type="text"
                    name="phone"
                    class="form-control"
                    value="{{ old('phone', $setting->phone) }}"
                >
            </div>

            {{-- Email --}}
            <div class="form-group">
                <label class="form-label">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email', $setting->email) }}"
                >
            </div>

            {{-- Alamat --}}
            <div class="form-group">
                <label class="form-label">
                    Alamat
                </label>

                <textarea
                    name="address"
                    class="form-control"
                    rows="4"
                >{{ old('address', $setting->address) }}</textarea>
            </div>

            {{-- Hari Operasional --}}
            <div class="form-group">
                <label class="form-label">
                    Hari Operasional
                </label>

                <input
                    type="text"
                    name="open_days"
                    class="form-control"
                    value="{{ old('open_days', $setting->open_days) }}"
                >
            </div>

            {{-- Jam Operasional --}}
            <div class="form-group">
                <label class="form-label">
                    Jam Operasional
                </label>

                <input
                    type="text"
                    name="open_hours"
                    class="form-control"
                    value="{{ old('open_hours', $setting->open_hours) }}"
                >
            </div>

            {{-- Hari Libur --}}
            <div class="form-group">
                <label class="form-label">
                    Hari Libur
                </label>

                <input
                    type="text"
                    name="holiday"
                    class="form-control"
                    value="{{ old('holiday', $setting->holiday) }}"
                >
            </div>
            <div class="form-group">

                <label class="form-label">
                    TikTok
                </label>

                <input
                    type="text"
                    name="tiktok"
                    class="form-control"
                    placeholder="Contoh: jokmobil atau https://tiktok.com/jokmobil"
                    value="{{ old('tiktok', $setting->tiktok) }}"
                >
                    <small class="form-help">
                        Bisa diisi username atau link lengkap Facebook.
                    </small>

            </div>

            <div class="form-group">

                <label class="form-label">
                    Youtube
                </label>

                <input
                    type="text"
                    name="tiktok"
                    class="form-control"
                    placeholder="Contoh: jokmobil atau https://youtube.com/jokmobil"
                    value="{{ old('youtube', $setting->youtube) }}"
                >
                    <small class="form-help">
                        Bisa diisi username atau link lengkap Facebook.
                    </small>

            </div>

            <div class="form-group">

                <label class="form-label">
                    Google Maps
                </label>

                <textarea
                    name="maps"
                    class="form-control"
                    rows="4"
                >{{ old('maps', $setting->maps) }}</textarea>

            </div>

        </div>


    <div class="form-actions">

        <a
            href="{{ route('admin.settings.index') }}"
            class="btn-cancel"
        >
            <i class="fas fa-arrow-left"></i>
            Batal
        </a>

        <button
            type="submit"
            class="btn-save"
        >
        <i class="fas fa-save"></i>
            Simpan Perubahan
        </button>

    </div>

</form>

</div>

@endsection

