<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('/dashboard1'); // Ganti dengan URL yang sesuai setelah login berhasil
        }

        return redirect('/login')->withErrors(['gagal' => 'Login gagal. Silakan periksa name dan password Anda.'])
            ->withInput($request->only('name'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
