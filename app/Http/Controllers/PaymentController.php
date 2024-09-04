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

        $losss = Transaction::insertGetId($data);



        // Kemudian kirimkan data ke view `checkout`
        return redirect('/checkout-pay' . '?token=' . $produks->token_produk);
    }



    public function getSnapToken(Request $request)
    {
        $gettoken = $_GET['token'];

        $kuantitas = $request;

        $produkDetail = Produk::join('sub_kategoris', 'produks.sub_kategori_id', '=', 'sub_kategoris.id_sub_kategori')->join('users', 'produks.users_id', '=', 'users.id')
            ->join('kategoris', 'sub_kategoris.kategori_id', '=', 'kategoris.id_kategoris')->join('atribut_produk', 'produks.id_produks', '=', 'atribut_produk.produks_id')
            ->where('produks.token_produk', $gettoken)->first();

        return view('pages.checkout', compact('produkDetail', 'kuantitas'));
    }

    public function processPayment(Request $request)
    {
        $json = json_decode($request->json, true);

        // Update transaction status
        $transaction = Transaction::where('order_id', $json['order_id'])->first();
        if ($transaction) {
            $transaction->update([
                'status' => $json['transaction_status'],
                'payment_response' => $request->json,
            ]);
        }

        return redirect()->route('home')->with('status', 'Payment ' . $json['transaction_status']);
    }
}
