<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;

class AuthController extends Controller
{
    // Menampilkan halaman login admin
    public function showLogin()
    {
        return view('admin.login');
    }

    // Memproses login admin
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cari admin berdasarkan email
        $admin = Admin::where('email', $credentials['email'])->first();

        // Cek admin dan password
        if ($admin && Hash::check($credentials['password'], $admin->password)) {

            // Simpan admin ke session
            session([
                'admin_id' => $admin->id,
                'admin_name' => $admin->name,
                'admin_email' => $admin->email,
            ]);

            // Arahkan ke dashboard
            return redirect()->route('admin.dashboard');
        }

        // Jika gagal login
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->withInput();
    }

    // Logout admin
    public function logout(Request $request)
    {
        $request->session()->forget([
            'admin_id',
            'admin_name',
            'admin_email',
        ]);

        $request->session()->regenerate();

        return redirect()->route('admin.login');
    }
}