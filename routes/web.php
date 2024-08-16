<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\UkuransController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\FotoProduksController;

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

Route::middleware(['guest'])->group(function () {

    // Route::get('/', [AuthController::class, 'index']);
    Route::get('/', function () {
        return redirect('/berung-madhure');
    })->name('login');

    Route::get('/berung-madhure', [AuthController::class, 'index']);

    Route::get('/test', function () {
        return view('admin.form_produk');
    });

    Route::post('/upload/ckeditor', [ProduksController::class, 'ckeditor'])->name('ckeditor.upload');


    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register_action']);
    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/produk/detail', [ProduksController::class, 'index']);
    Route::get('/produk', [ProduksController::class, 'produk']);
});


Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return redirect('/dashboard');
    });
    Route::get('/dashboard', function () {
        return view('admin.menu_users');
    });


    Route::middleware(['userAkses:admin'])->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
        // Route::get('/keranjang', [KeranjangController::class, 'index']);

        Route::get('/admin/produk', [ProduksController::class, 'index']);
        Route::get('/admin/produk-baru', [ProduksController::class, 'create']);
        Route::post('/admin/produk-baru', [ProduksController::class, 'create_action']);
        Route::get('/admin/ukuran', [UkuransController::class, 'index']);
        Route::get('/admin/kategori', [KategorisController::class, 'index']);
        Route::get('/admin/foto-produk', [FotoProduksController::class, 'index']);
    });













    Route::middleware(['userAkses:mitra'])->group(function () {
        Route::get('/dashboard/mitra', [DashboardController::class, 'dashboard']);
    });







    Route::middleware(['userAkses:customer'])->group(function () {
        Route::get('/page', [CustomerController::class, 'index']);
    });


    // Route::get('/dashboard', [DashboardController::class, 'dashboard']);



    Route::get('/logout', [AuthController::class, 'logout']);
});
