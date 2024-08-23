<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Settings;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $produks = Produk::with(['atr' => function($query) {
            $query->select('produks_id', 'stok', 'harga')
                  ->orderBy('harga', 'asc'); // Urutkan harga untuk kemudahan
        }])
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();

        // Loop untuk mengkalkulasi stok dan rentang harga
        foreach ($produks as $produk) {
            // Kalkulasi total stok
            $produk->total_stok = $produk->atr->sum('stok');

            // Dapatkan harga terendah dan tertinggi
            $produk->harga_terendah = $produk->atr->min('harga');
            $produk->harga_tertinggi = $produk->atr->max('harga');
        }

        return view('pages.beranda', compact('produks'));
    }


    public function create()
    {
        return view();
    }
    public function create_action(Request $request)
    {
        return redirect();
    }
    public function update($id)
    {
        return view();
    }
    public function update_action(Request $request, $id)
    {
        return redirect();
    }
    public function delete($id)
    {
        return redirect();
    }
}
