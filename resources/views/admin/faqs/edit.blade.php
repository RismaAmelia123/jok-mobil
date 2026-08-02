@extends('layouts.admin')

@section('title', 'Edit FAQ')

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

        <h1>Edit FAQ</h1>

        <p>
            Perbarui informasi FAQ.
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


    {{-- Form --}}
    <div class="service-form-card">

        <div class="form-card-header">

            <h3>Informasi FAQ</h3>

            <p>
                Ubah informasi FAQ sesuai kebutuhan.
            </p>

        </div>


        <form
            action="{{ route('admin.faqs.update', $faq) }}"
            method="POST"
            {{-- enctype="multipart/form-data" --}}
            class="service-form"
        >

            @csrf
            @method('PUT')
            <div class="form-group">

                <label class="form-label">
                    Pertanyaan <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="question"
                    class="form-control"
                    value="{{ old('question', $faq->question) }}"
                    placeholder="Masukkan pertanyaan"
                >

                @error('question')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="form-group">

                <label class="form-label">
                    Jawaban <span class="required">*</span>
                </label>

                <textarea
                    name="answer"
                    class="form-control"
                    placeholder="Masukkan jawaban"
                >{{ old('answer', $faq->answer) }}</textarea>

                @error('answer')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="form-group">

                <label class="form-label">
                    Urutan Tampil
                </label>

                <input
                    type="number"
                    name="sort_order"
                    class="form-control"
                    value="{{ old('sort_order', $faq->sort_order) }}"
                    min="0"
                >

                @error('sort_order')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Status --}}
            <div class="form-group">

                <label class="form-label">
                    Status FAQ
                </label>

                <div class="status-box">

                    <input
                        type="checkbox"
                        id="is_active"
                        name="is_active"
                        value="1"
                        {{ old('is_active', $faq->is_active) ? 'checked' : '' }}
                    >

                    <label for="is_active">
                        Tampilkan FAQ di website
                    </label>

                </div>

            </div>


            {{-- Action --}}
            <div class="form-actions">

                <a
                    href="{{ route('admin.faqs.index') }}" 
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

</div>

@endsection