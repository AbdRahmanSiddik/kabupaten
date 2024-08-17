<?php

namespace App\Http\Controllers;

use App\Models\AtributProduk;
use App\Models\Foto_produk;
use App\Models\Produk;
use App\Models\Varian;
use App\Models\Kategori;
use App\Models\Pivot_Produk_Kategori;
use App\Models\Ukuran;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProduksController extends Controller
{
    public function ckeditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            $token = Str::random(10);

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $token . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    public function index()
    {

        $dataProduk = [
            "dataProduk" => Produk::ProdukJoinUsers()->get()
        ];

        return view('admin.produks.produk', $dataProduk);
    }

    public function produk()
    {

        return view('pages.produk');
    }

    public function create()
    {
        $kategoris = kategori::with('subs')->get();

        return view('admin.produks.produk_create', compact('kategoris'));
    }

    public function create_action(Request $request)
    {
        // $request->validate([

        // ]);
        $token = uniqid('', true);
        $userId = auth()->user()->id;
        $produk = [
            'token_produk' => $token,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'thumbnail' => $request->thumbnail,
            'sub_kategori_id' => $request->sub_kategori,
            'users_id' => $userId,
        ];

        $produk = Produk::insertGetId($produk);

        $rawDataAtribut = AtributProduk::rawData($produk, [
            'varians' => $request->input('varian', []),
            'ukurans' => $request->input('ukuran', []),
            'hargas' => $request->input('harga', []),
            'stoks' => $request->input('stok', []),
        ]);
        AtributProduk::insert($rawDataAtribut);

        return redirect("/produk");
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
