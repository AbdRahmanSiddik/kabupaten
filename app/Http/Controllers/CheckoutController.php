<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($token, Request $request)
    {
        $kuantitas = $request->quantity;
        // Kamu bisa melakukan sesuatu dengan token ini, misalnya mengambil data produk terkait
        $produkDetail = Produk::join('sub_kategoris', 'produks.sub_kategori_id', '=', 'sub_kategoris.id_sub_kategori')->join('users', 'produks.users_id', '=', 'users.id')
            ->join('kategoris', 'sub_kategoris.kategori_id', '=', 'kategoris.id_kategoris')->join('atribut_produk', 'produks.id_produks', '=', 'atribut_produk.produks_id')
            ->where('produks.token_produk', $token)->first();

        // Kemudian kirimkan data ke view `checkout`
        return view('pages.checkout', compact('produkDetail', 'kuantitas'));
    }
}
