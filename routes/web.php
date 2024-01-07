<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterAdminController;
use App\Http\Controllers\Auth\LoginAdminController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\UserPovController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {
    // Rute yang membutuhkan middleware 'web'
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/loginAdmin', [LoginAdminController::class, 'showLoginAdminForm'])->name('loginAdmin');
    Route::post('/loginAdmin', [LoginAdminController::class, 'loginAdmin']);
    Route::get('/dashboard1', [UserPovController::class, 'index'])->name('dashboard1');
    Route::get('/lamankursus', [UserPovController::class, 'index'])->name('lamankursus');
    Route::get('pendaftaran', function () {
        return view('pendaftaran');
    });

    
    

});

    Route::get('/isikursus',[PendaftaranController::class,'index'])->name('isikursus');
    Route::get('/isikursus/{id}',[PendaftaranController::class,'show'])->name('detailIsiKursus');
    Route::post('/storePendaftaran',[PendaftaranController::class,'store'])->name('storePendaftaran');

Route::group(['middleware' => 'admin'], function () {
    // Rute yang membutuhkan middleware 'auth' (hanya dapat diakses oleh pengguna yang sudah login)
    Route::get('/adminkursus', [KursusController::class, 'index'])->name('adminkursus');
    Route::post('/storeAdminKursus', [KursusController::class, 'store'])->name('adminkursusStore');

    Route::get('/adminisikursus', [KursusController::class, 'showIsiKursusAdmin'])->name('adminisikursus');
    Route::post('/storeAdminIsiKursus', [KursusController::class, 'storeIsiKursus'])->name('adminIsikursusStore');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/registerAdmin', [RegisterAdminController::class, 'showRegistrationAdminForm'])->name('registerAdmin');
Route::post('/registerAdmin', [RegisterAdminController::class, 'registerAdmin']);



Route::get('pendaftaran', function () {
    return view('pendaftaran');
});
