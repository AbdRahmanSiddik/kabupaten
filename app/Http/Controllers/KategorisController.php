<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pivot_Produk_Kategori;
use Illuminate\Http\Request;

class KategorisController extends Controller
{
    public function index()
    {
        $kategori = Kategori::get();
        return view('admin.kategori.kategori', compact('kategori'));
    }

    public function create_action(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategoris'
        ], [
            'nama_kategori' => 'nama_kategori sudah ada'
        ]);

        Kategori::create(['nama_kategori' => $request->nama_kategori]);

        return redirect('/admin/kategori');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategoris'
        ], [
            'nama_kategori' => 'nama_kategori sudah ada'
        ]);

        Kategori::where('id_kategoris', $id)->update(['nama_kategori' => $request->nama_kategori]);

        return redirect('/admin/kategori');
    }

    public function delete($id)
    {
        $data_produk = Pivot_Produk_Kategori::where('kategoris_id', $id)->first();
        if (isset($data_produk)) {
            return redirect('/admin/kategori')->with(['success' => 'ada produk yang masih menggunakan kategori ini']);
        }

        Kategori::where('id_kategoris', $id)->delete();
        return redirect('/admin/kategori')->with(['success' => 'Berhasil Menghapus Data']);
    }
}
