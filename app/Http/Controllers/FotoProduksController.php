<?php

namespace App\Http\Controllers;

use App\Models\AtributProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class FotoProduksController extends Controller
{
    public function index()
    {
        $id = $_GET['id'];
        $detail = Produk::where('id_produks', $id)->first();
        $atributProduk = AtributProduk::where('produks_id', $id)->get();

        return view('admin.produks.foto_produk', compact('atributProduk', 'detail'));
    }

    public function create()
    {
        return view();
    }

    public function store(Request $request)
    {

        return redirect()->route('produk.index');
    }

    public function edit($id)
    {
        return view();
    }

    public function update(Request $request, $id)
    {
        // Ambil semua file yang diupload
        $files = $request->file('thumbnail', []);

        // Jika ada file yang diupload
        if (!empty($files)) {
            foreach ($files as $index => $file) {
                $token = uniqid(13);
                // Pastikan file ada
                if ($file) {
                    // Buat nama file unik
                    $nama_foto = $token . '.' . $file->getClientOriginalExtension();

                    // Tentukan atribut produk terkait berdasarkan urutan
                    $atributProduk = AtributProduk::where('produks_id', $id)
                        ->orderBy('produks_id')
                        ->skip($index)
                        ->first();

                    if ($atributProduk) {
                        // Update kolom foto_produk di tabel atribut_produk
                        $atributProduk->update(['foto_produk' => $nama_foto]);

                        // Pindahkan file ke direktori yang ditentukan
                        $file->move('foto-varian', $nama_foto);
                    }
                }
            }
        }

        return redirect(auth()->user()->role . '-produk');
    }

    public function destroy($id)
    {
        return redirect();
    }
}
