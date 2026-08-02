<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class ProfileController extends Controller
{
    public function index()
    {
        $admin = Admin::find(session('admin_id'));

        return view('admin.profile.index', compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = Admin::find(session('admin_id'));

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
        ]);

        $admin->name = $request->name;
        // $admin->username = $request->username;
        $admin->email = $request->email;

        // kalau password diisi
        if ($request->filled('password')) {

            $request->validate([
                'old_password' => 'required',
                'password' => 'required|min:8|confirmed'
            ]);

            if (!Hash::check($request->old_password, $admin->password)) {

                return back()->withErrors([
                    'old_password' => 'Password lama salah.'
                ]);
            }

            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        session([
            'admin_name' => $admin->name
        ]);

        return back()->with('success', 'Profil berhasil diperbarui.');
    }
}