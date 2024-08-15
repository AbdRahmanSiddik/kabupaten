<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProduksController;

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

    Route::get('/', [AuthController::class, 'index']);
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register_action']);
    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/detail/produk', [ProduksController::class, 'index']);
});


Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return redirect('/dashboard');
    });
    Route::get('/dashboard', function () {
        return view('admin.menu_users');
    });


    Route::middleware(['userAkses:admin'])->group(function () {

        Route::get('/dashboard/admin', [DashboardController::class, 'dashboard']);
        // Route::get('/keranjang', [KeranjangController::class, 'index']);

        Route::middleware(['userAkses:mitra'])->group(function () {
            Route::get('/dashboard/mitra', [DashboardController::class, 'dashboard']);
        });
    });
    Route::middleware(['userAkses:customer'])->group(function () {
        Route::get('/page', [CustomerController::class, 'index']);
    });


    // Route::get('/dashboard', [DashboardController::class, 'dashboard']);



    Route::get('/logout', [AuthController::class, 'logout']);
});
