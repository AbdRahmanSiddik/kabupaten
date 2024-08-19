<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\UkuransController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MitraUmkmController;
use App\Http\Controllers\FotoProduksController;
use App\Http\Controllers\SubKategoriController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Rute untuk pengguna tamu
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect('/berung-madhure');
    })->name('login');

    Route::get('/berung-madhure', [AuthController::class, 'index']);
    Route::get('/kategori', [KategorisController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register_action']);
    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/produk/detail', [ProduksController::class, 'index']);
    Route::get('/produk', [ProduksController::class, 'produk']);
});

// Rute untuk pengguna yang telah diautentikasi
Route::middleware('auth')->group(function () {




    Route::get('/home', [AuthController::class, 'AuthRole__']);
    // Rute untuk admin
    Route::middleware('userAkses:admin')->group(function () {

        Route::get('/dashboard/admin', [DashboardController::class, 'dashboard']);
        Route::get('/produk', [ProduksController::class, 'index']);
        Route::get('/produk-baru', [ProduksController::class, 'create']);
        Route::post('/produk-baru', [ProduksController::class, 'create_action']);
        Route::get('/ukuran', [UkuransController::class, 'index']);
        Route::get('/foto-produk', [FotoProduksController::class, 'index']);
        Route::get('/kategori', [KategorisController::class, 'index']);
        Route::post('/kategori', [KategorisController::class, 'create_action']);
        Route::post('/kategori/{id}/edit', [KategorisController::class, 'update']);
        Route::get('/kategori/{id}/hapus', [KategorisController::class, 'delete']);
        Route::get('/kategori/{id}/subs', [SubKategoriController::class, 'index']);
        Route::post('/kategori/{id}/subs', [SubKategoriController::class, 'store']);
        Route::post('/kategori/{id}/{sub_id}/subs', [SubKategoriController::class, 'update']);
        Route::get('/kategori/{sub_id}/subs_hapus', [SubKategoriController::class, 'destroy']);

        // profile 
        Route::get('/settings', [SettingsController::class, 'index']);
        Route::get('/profile/{token}', [SettingsController::class, 'profile']);
        Route::get('/profile/{token}/edit', [SettingsController::class, 'profile_edit']);
        Route::post('/profile/{token}/edit', [SettingsController::class, 'profile_edit_action']);
        // end profile
        Route::post('/upload/ckeditor', [ProduksController::class, 'ckeditor'])->name('ckeditor.upload');
    });

    // Rute untuk mitra
    Route::middleware('userAkses:mitra')->group(function () {
        Route::get('/dashboard/mitra', [DashboardController::class, 'dashboard']);
    });


    Route::middleware('userAkses:customer')->group(function () {

        // Profile
        Route::get('/profile/{token}', [SettingsController::class, 'profile']);
        Route::get('/profile/{token}/edit', [SettingsController::class, 'profile_edit']);
        Route::post('/profile/{token}/edit', [SettingsController::class, 'profile_edit_action']);
        Route::get('/page', [CustomerController::class, 'index']);
        // End profile

        // Halaman utama untuk customer




        Route::get('/daftar/umkm', [MitraUmkmController::class, 'daftar']);
        Route::post('/daftar/umkm', [MitraUmkmController::class, 'daftar_action']);
    });


    // Route untuk email sudah dikirimkan
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');




    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/hello');
    })->middleware(['signed'])->name('verification.verify');


    Route::get('/logout', [AuthController::class, 'logout']);
});
