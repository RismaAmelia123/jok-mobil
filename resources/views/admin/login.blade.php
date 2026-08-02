<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - {{ $setting->company_name }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="font-family: 'Poppins', sans-serif;">

    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-light">

        <div class="card border-0 shadow-sm" style="width: 420px;">

            <div class="card-body p-5">

                <div class="text-center mb-4">

                    <h2 class="fw-bold text-primary mb-2">
                        {{ $setting?->company_name }}
                    </h2>

                    <p class="text-muted mb-0">
                        Login Admin
                    </p>

                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('admin.login.process') }}" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Masukkan email"
                            value="{{ old('email') }}"
                            required
                        >

                    </div>

                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            required
                        >

                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-100"
                    >
                        Login
                    </button>

                </form>

                <div class="text-center mt-4">

                    <a href="{{ url('/') }}"
                       class="text-decoration-none text-muted">
                        ← Kembali ke website
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>
</html>