<?php

namespace App\Http\Controllers;

// use Midtrans\Snap;
// use Midtrans\Config;
// use App\Models\Produk;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Produk;
use App\Models\Transaction;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaymentController extends Controller
{

    public function index($token, Request $request)
    {
        // dd($request->all());

        $kuantitas = $request->quantity;
        $pembeli = auth()->user()->id;

        $produks = Produk::join('atribut_produk', 'produks.id_produks', '=', 'atribut_produk.produks_id')->where('token_produk', $token)->first();

        $total = $produks->harga * $kuantitas;

        $data = [
            'quantity' => $kuantitas,
            'users_id' => $pembeli,
            'produks_id' =>  $produks->id_produks,
            'total_price' => $total,
            'status' => 'pending',
            'harga' => $produks->harga
        ];
        // dd($data);

        $losss = Transaction::create($data);


        // Kamu bisa melakukan sesuatu dengan token ini, misalnya mengambil data produk terkait


        // Kemudian kirimkan data ke view `checkout`
        return view('pages.checkout', compact('produkDetail', 'kuantitas'));
    }



    public function process(Request $request)
    {

        $data = $request->all();


        $transaction = Transaction::create([
            "user_id"

        ]);
    }
}
