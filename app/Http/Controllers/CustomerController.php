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
        $produks = Produk::with(['atr' => function ($query) {
            $query->select('produks_id', 'stok', 'harga')
                ->orderBy('harga', 'asc'); // Urutkan harga untuk kemudahan
        }])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $data = [
            'getCustomer' => DB::table('mitra_umkms')
                ->join('users', 'mitra_umkms.users_id', '=', 'users.id')->first()
        ];

        return view('pages.beranda', $data, compact('produks'));
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
