<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
class LoginAdminController extends Controller
{
    public function showLoginAdminForm()
    {
        return view('loginAdmin');
    }



  
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed

            // Contoh: Mendapatkan data admin berdasarkan username
            $admin = Auth::guard('admin')->user();

            // Jika ingin menampilkan informasi admin
            // echo "Selamat datang, " . $admin->name;

            return redirect('/adminkursus'); // Ganti dengan URL yang sesuai setelah login berhasil
        }

        return redirect('/loginAdmin')->withErrors(['gagal' => 'Login gagal. Silakan periksa username dan password Anda.'])
            ->withInput($request->only('username'));
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
