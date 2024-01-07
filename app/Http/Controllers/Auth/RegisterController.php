<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class RegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('register');
    }
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);
    
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            return redirect('/login')->with('success', 'Akun Anda telah berhasil dibuat!');
        } catch (ValidationException $e) {
            return redirect('/register')->withErrors(['gagal' => 'Registrasi gagal. Harap periksa kembali formulir Anda.'])
                ->withInput($request->except('password', 'password_confirmation'));
        }
    }
}
