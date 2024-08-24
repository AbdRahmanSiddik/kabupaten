<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {

        $data = [
            'getStatus' => DB::table('mitra_umkms')
                ->join('users', 'mitra_umkms.users_id', '=', 'users.id')->first(),

            'produks' => Produk::with(['atr' => function ($query) {
                $query->select('produks_id', 'stok', 'harga')
                    ->orderBy('harga', 'asc');
            }])
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get()
        ];

        return view('pages.beranda', $data);
    }

    public function produk()
    {

        $allData = [
            
        ];

        return view('pages.produk');
    }


    public function produk_detail() {}


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
