@extends('layouts.admin')

@section('title', 'Profil Admin')

@section('content')

<style>

    .profile-page{
        width:100%;
    }

    .profile-header{
        margin-bottom:25px;
    }

    .profile-header h1{
        margin:0 0 6px;
        font-size:28px;
        font-weight:700;
        color:#1f2937;
    }

    .profile-header p{
        margin:0;
        color:#7b8494;
        font-size:14px;
    }

    .profile-card{
        max-width:850px;
        background:#fff;
        border:1px solid #edf0f4;
        border-radius:14px;
        box-shadow:0 3px 14px rgba(0,0,0,.03);
        overflow:hidden;
    }

    .profile-card-header{
        padding:22px 25px;
        border-bottom:1px solid #edf0f4;
    }

    .profile-card-header h3{
        margin:0;
        font-size:17px;
        font-weight:700;
    }

    .profile-form{
        padding:25px;
    }

    .form-group{
        margin-bottom:20px;
    }

    .form-label{
        display:block;
        margin-bottom:8px;
        font-size:13px;
        font-weight:600;
        color:#374151;
    }

    .form-control{
        width:100%;
        padding:11px 13px;
        border:1px solid #dfe3e8;
        border-radius:8px;
        font-size:13px;
    }

    .form-control:focus{
        outline:none;
        border-color:#1f6feb;
        box-shadow:0 0 0 3px rgba(31,111,235,.08);
    }

    .section-title{
        margin:35px 0 20px;
        padding-bottom:10px;
        border-bottom:1px solid #edf0f4;
        font-size:15px;
        font-weight:700;
        color:#273142;
    }

    .form-actions{
        display:flex;
        justify-content:flex-end;
        margin-top:25px;
    }

    .btn-save{
        padding:10px 20px;
        border:none;
        border-radius:8px;
        background:#1f6feb;
        color:#fff;
        font-weight:600;
        cursor:pointer;
    }

    .btn-save:hover{
        background:#185abc;
    }

    .form-error{
        color:#dc3545;
        font-size:12px;
        margin-top:5px;
    }
    .password-wrapper{
    position: relative;
    }

    .password-wrapper .form-control{
        padding-right:30px;
    }

    .toggle-password{
        position:absolute;
        top:70%;
        right:15px;
        transform:translateY(-50%);
        cursor:pointer;
        color:#9ca3af;
        font-size:16px;
        transition:.2s;
    }

    .toggle-password:hover{
        color:#1f6feb;
    }

</style>


<div class="profile-page">

    <div class="profile-header">

        <h1>Profil Admin</h1>

        <p>
            Kelola informasi akun administrator.
        </p>

    </div>


    <div class="profile-card">

        <div class="profile-card-header">

            <h3>Data Akun</h3>

        </div>


        <form
            action="{{ route('admin.profile.update') }}"
            method="POST"
            class="profile-form"
        >

            @csrf
            @method('PUT')


            {{-- Nama --}}

            <div class="form-group">

                <label class="form-label">
                    Nama Lengkap
                </label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Masukkan nama"
                    value="{{ old('name',$admin->name) }}"
                >

                @error('name')
                    <div class="form-error">{{ $message }}</div>
                @enderror

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
                    placeholder="Masukkan email"
                    value="{{ old('email',$admin->email) }}"
                >

                @error('email')
                    <div class="form-error">{{ $message }}</div>
                @enderror

            </div>


            <div class="section-title">

                Keamanan Akun

            </div>


            <div class="form-group">
                <div class="password-wrapper">
                <label class="form-label">

                    Password Lama

                </label>

                <input
                    type="password"
                    name="old_password"
                    class="form-control"
                    id="old_password"
                    placeholder="Password lama"
                >
                <i class="fas fa-eye toggle-password" data-target="old_password"></i>
                @error('old_password')
                    <div class="form-error">{{ $message }}</div>
                @enderror
                </div>

            </div>

            <div class="form-group">
                <div class="password-wrapper">
                <label class="form-label">

                    Password Baru

                </label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    id="password"
                    placeholder="Password baru"
                    >
                    <i class="fas fa-eye toggle-password" data-target="password"></i>
                    @error('password')
                    <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

            </div>


            <div class="form-group">
                <div class="password-wrapper">
                <label class="form-label">

                    Konfirmasi Password Baru

                </label>
                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    id="password_confirmation"
                    placeholder="Konfirmasi password baru"
                >
                <i class="fas fa-eye toggle-password" data-target="password_confirmation"></i>
                </div>

            </div>


            <div class="form-actions">

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
<script>

document.querySelectorAll('.toggle-password').forEach(function(icon){

    icon.addEventListener('click', function(){

        const input = document.getElementById(this.dataset.target);

        if(input.type === 'password'){

            input.type = 'text';

            this.classList.remove('fa-eye');
            this.classList.add('fa-eye-slash');

        }else{

            input.type = 'password';

            this.classList.remove('fa-eye-slash');
            this.classList.add('fa-eye');

        }

    });

});

</script>
@endsection