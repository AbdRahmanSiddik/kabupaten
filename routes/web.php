<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/detail/produk', function () {
    return view('pages.detail_produk');
});

Route::get('/produk', function () {
    return view('pages.produk');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/keranjang', function () {
    return view('pages.keranjang');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/produk', function () {
    return view('admin.produk');
});
Route::get('/admin/detail/produk', function () {
    return view('admin.detail_penjualan');
});
