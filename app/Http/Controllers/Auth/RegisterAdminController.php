<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class RegisterAdminController extends Controller
{
    public function showRegistrationAdminForm(){
        return view('registerAdmin');
    }
    public function registerAdmin(Request $request)
    {
        try {
            $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:admin',
                'password' => 'required|string|min:8|confirmed',
            ]);
        
            Admin::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            return redirect('/loginAdmin')->with('success', 'Akun Anda telah berhasil dibuat!');
        } catch (ValidationException $e) {
            return redirect('/registerAdmin')->withErrors(['gagal' => 'Registrasi gagal. Harap periksa kembali formulir Anda.'])
                ->withInput($request->except('password', 'password_confirmation'));
        }
    }
}
