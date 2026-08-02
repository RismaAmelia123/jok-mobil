<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin {{ $setting?->company_name }}')</title>

    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >
    <link rel="stylesheet"
    href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f6f8fb;
            color: #212529;
        }

        /* =========================
           SIDEBAR
        ========================= */

        .admin-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;

            width: 250px;

            background: #ffffff;

            border-right: 1px solid #e9ecef;

            z-index: 1000;

            display: flex;
            flex-direction: column;

            transition: all 0.3s ease;
        }
        .admin-sidebar.closed{
            transform: translateX(-250px);
        }

        .admin-content{
            margin-left:250px;
            min-height:100vh;
            transition:all .3s ease;
        }

        .admin-content.full{
            margin-left:0;
        }

        .admin-brand {
            height: 75px;

            display: flex;
            align-items: center;

            padding: 0 25px;

            border-bottom: 1px solid #f0f0f0;
        }

        .admin-brand a {
            text-decoration: none;
        }

        .brand-title {
            margin: 0;

            font-size: 22px;
            font-weight: 700;

            color: #0d6efd;
        }

        .brand-subtitle {
            display: block;

            font-size: 10px;

            color: #adb5bd;

            letter-spacing: 1px;

            margin-top: -2px;
        }

        /* =========================
           MENU
        ========================= */
        .admin-menu{
            padding:25px 15px;
            flex:1;
            overflow-y:auto;

            scrollbar-width:none;      /* Firefox */
            -ms-overflow-style:none;   /* IE */
        }

        .admin-menu::-webkit-scrollbar{
            display:none;
        }

        .menu-title {
            font-size: 10px;

            font-weight: 600;

            color: #adb5bd;

            text-transform: uppercase;

            letter-spacing: 1px;

            padding: 0 15px;

            margin-bottom: 10px;
        }

        .admin-menu a {
            display: flex;

            align-items: center;

            gap: 13px;

            padding: 12px 15px;

            margin-bottom: 5px;

            border-radius: 10px;

            text-decoration: none;

            color: #6c757d;

            font-size: 13px;

            font-weight: 500;

            transition: all 0.2s ease;
        }

        .admin-menu a i {
            font-size: 17px;

            width: 20px;

            text-align: center;
        }

        .admin-menu a:hover {
            background: #f0f6ff;

            color: #0d6efd;
        }

        .admin-menu a.active {
            background: #0d6efd;

            color: #ffffff;

            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.18);
        }

        /* =========================
           LOGOUT
        ========================= */
        .menu-toggle{
            background:none;
            border:none;
            font-size:22px;
            cursor:pointer;
            color:#495057;
            margin-right:auto;
        }

        .logout-button{
        width:100%;
        display:flex;
        align-items:center;
        gap:13px;

        padding:12px 15px;

        background:none;
        border:none;
        border-radius:10px;

        color:#dc3545;
        font-size:13px;
        font-weight:500;

        cursor:pointer;
        transition:.2s;
        }

        .logout-button:hover{
            background:#dc3545;
            color:#fff;
        }

        /* =========================
           CONTENT
        ========================= */

        .admin-content {
            margin-left: 250px;

            min-height: 100vh;
        }

        /* =========================
           TOPBAR
        ========================= */

        .admin-navbar {
            height: 75px;

            background: #ffffff;

            border-bottom: 1px solid #e9ecef;

            display: flex;

            align-items: center;

            justify-content: flex-end;

            padding: 0 30px;
        }

        .admin-profile {
            display: flex;

            align-items: center;

            gap: 12px;
        }

        .profile-btn{
            display:flex;
            align-items:center;
            gap:12px;

            text-decoration:none;
            color:inherit;

            padding:8px 12px;

            border-radius:10px;

            transition:.2s;
        }

        .profile-btn:hover{
            background:#f5f7fb;
            color:inherit;
        }

        .admin-info {
            text-align: right;
        }

        .admin-info strong {
            display: block;

            font-size: 13px;

            font-weight: 600;
        }

        .admin-info small {
            display: block;

            color: #adb5bd;

            font-size: 10px;
        }

        .admin-avatar {
            width: 42px;

            height: 42px;

            border-radius: 50%;

            background: #0d6efd;

            color: #ffffff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 14px;

            font-weight: 600;
        }

        /* =========================
           MAIN
        ========================= */

        .admin-main {
            padding: 30px;
        }

        .page-title {
            font-size: 24px;

            font-weight: 700;

            margin-bottom: 4px;
        }

        .page-subtitle {
            color: #8c98a4;

            font-size: 13px;

            margin-bottom: 0;
        }

        /* =========================
           STAT CARD
        ========================= */

        .stat-card {
            background: #ffffff;

            border: 0;

            border-radius: 14px;

            padding: 22px;

            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);

            height: 100%;

            transition: 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-2px);

            box-shadow: 0 7px 22px rgba(0, 0, 0, 0.07);
        }

        .stat-icon {
            width: 48px;

            height: 48px;

            border-radius: 12px;

            background: #eef5ff;

            color: #0d6efd;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;
        }

        .stat-label {
            color: #8c98a4;

            font-size: 12px;

            margin-bottom: 4px;
        }

        .stat-number {
            font-size: 27px;

            font-weight: 700;

            margin: 0;
        }

        /* =========================
           CONTENT CARD
        ========================= */

        .content-card {
            background: #ffffff;

            border-radius: 14px;

            border: 0;

            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
        }

        .content-card-header {
            padding: 20px 22px;

            border-bottom: 1px solid #f0f0f0;
        }

        .content-card-body {
            padding: 22px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 768px) {

            .admin-sidebar {
                width: 220px;

                transform: translateX(-100%);
            }

            .admin-content {
                margin-left: 0;
            }

            .admin-main {
                padding: 20px;
            }

            .admin-navbar {
                padding: 0 20px;
            }

        }

    </style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body>

    <!-- =========================
         SIDEBAR
    ========================= -->

    <aside class="admin-sidebar">

        <div class="admin-brand">

            <a href="{{ route('admin.dashboard') }}">

                <h4 class="brand-title">
                    {{ $setting?->company_name }}
                </h4>

                <span class="brand-subtitle">
                    ADMIN PANEL
                </span>

            </a>

        </div>


        <div class="admin-menu">

            <div class="menu-title">
                Menu Utama
            </div>


            <a
                href="{{ route('admin.dashboard') }}"
                class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
            >
                <i class="bi bi-grid-1x2-fill"></i>

                <span>
                    Dashboard
                </span>
            </a>


            <a
                href="{{ route('admin.services.index') }}"
                class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}"
            >
                <i class="bi bi-car-front-fill"></i>

                <span>
                    Layanan
                </span>
            </a>
            
            <a
                href="{{ route('admin.materials.index') }}"
                class="{{ request()->routeIs('admin.materials.*') ? 'active' : '' }}"
            >
                <i class="bi bi-box-seam-fill"></i>

                <span>
                    Bahan Interior
                </span>
            </a>
            <a
                href="{{ route('admin.galleries.index') }}"
                class="{{ request()->routeIs('admin.galleries.*') ? 'active' : '' }}"
            >
                <i class="bi bi-images"></i>

                <span>
                    Galeri
                </span>
            </a>

            <a
                href="{{ route('admin.testimonials.index') }}"
                class="{{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}"
            >
                <i class="bi bi-star-fill"></i>

                <span>
                    Testimoni
                </span>
            </a>


            <a
                href="{{ route('admin.faqs.index') }}"
                class="{{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}"

            >
                <i class="bi bi-question-circle-fill"></i>

                <span>
                    FAQ
                </span>
            </a>


            <div class="menu-title mt-4">
                Pengaturan
            </div>


            <a
                href="{{ route('admin.settings.index') }}"
                class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}"
            >
                <i class="bi bi-gear-fill"></i>

                <span>
                    Pengaturan Website
                </span>
            </a>
                        <a
                href="{{ route('admin.profile.index') }}"
                class="{{ request()->routeIs('admin.profile.*') ? 'active' : '' }}"
            >
                <i class="bi bi-person-fill"></i>

                <span>
                    Profile
                </span>
            </a>
            <!-- LOGOUT -->

            <div class="sidebar-bottom">

                <form
                    action="{{ route('admin.logout') }}"
                    method="POST"
                >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >

                <i class="bi bi-box-arrow-right"></i>

                    Logout

                </button>

                </form>

            </div>

        </div>

    </aside>



    <!-- =========================
         CONTENT
    ========================= -->

    <div class="admin-content">


        <!-- TOPBAR -->

        <nav class="admin-navbar">
            <button class="menu-toggle" id="menuToggle">
                <i class="bi bi-list"></i>
            </button>
            <a href="{{ route('admin.profile.index') }}"class="profile-btn">

                <div class="admin-info">
                    <strong>{{ session('admin_name') }}</strong>
                    <small>Administrator</small>
                </div>

                <div class="admin-avatar">
                    {{ strtoupper(substr(session('admin_name'),0,1)) }}
                </div>

            </a>

        </nav>


        <!-- PAGE -->

        <main class="admin-main">

            @yield('content')

        </main>


    </div>

@if(session('success'))

<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: @json(session('success')),
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
</script>
@endif
@if(session('error'))
<script>
Swal.fire({
    icon:'error',
    title:'Gagal!',
    text:@json(session('error')),
    toast:true,
    position:'top-end',
    showConfirmButton:false,
    timer:3000,
    timerProgressBar:true
});
</script>
@endif
<script>

const toggle = document.getElementById("menuToggle");
const sidebar = document.querySelector(".admin-sidebar");
const content = document.querySelector(".admin-content");

toggle.addEventListener("click",function(){

    if(window.innerWidth <= 768){

        sidebar.classList.toggle("show");

    }else{

        sidebar.classList.toggle("closed");
        content.classList.toggle("full");

    }

});

</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function () {
    $('#serviceTable').DataTable({
        pageLength: 10,
        lengthMenu: [5,10,25,50],
        ordering: true,
        searching: true,
        responsive: true,
        language: {
            search: "Cari :",
            lengthMenu: "Tampilkan _MENU_ data",
            zeroRecords: "Data tidak ditemukan",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Belum ada data",
            paginate: {
                previous: "←",
                next: "→"
            }
        }
    });
});
</script>
</body>

</html>