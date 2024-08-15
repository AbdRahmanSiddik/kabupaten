<?php

namespace App\Http\Controllers;

use App\Models\Foto_produk;
use App\Models\Produk;
use App\Models\Varian;
use App\Models\Kategori;
use App\Models\Pivot_Produk_Kategori;
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
        return view('admin.produks.produk');
    }

    public function produk()
    {

        return view('pages.produk');
    }

    public function create()
    {
        return view('admin.produks.produk_create');
    }
    public function create_action(Request $request)
    {

        $dataVarian = [
            "nama_varian" => $request->nama_varian,
            "produks_id" => $request->produks_id,
        ];


        $dataProduk = [
            "nama_produk" => $request->nama_produk,
            "harga" => $request->harga,
            "deskripsi" => $request->deskripsi,
            "thumbnail" => $request->thumbnail,
            "stok" => $request->stok,
            "users_id" => $request->users_id,
        ];

        $dataFoto = [
            "foto_produk" => $request->foto_produk,
        ];

        $dataKategori = [
            "kategori_id" => $request->kategori_id,
        ];



        Foto_produk::create($dataFoto);
        Produk::create($dataProduk);
        Pivot_Produk_Kategori::create($dataKategori);
        Varian::create($dataVarian);

        return redirect("/admin/produk");
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
