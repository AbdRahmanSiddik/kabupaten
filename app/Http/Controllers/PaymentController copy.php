<?php

namespace App\Http\Controllers;


use Midtrans\Snap;
use App\Models\Produk;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaymentController extends Controller
{


    public function process($token, Request $request)
    {
        $kuantitas = $request->input('quantity');
        $pembeli = auth()->user()->id;

        // Ambil data produk berdasarkan token
        $produks = Produk::join('atribut_produk', 'produks.id_produks', '=', 'atribut_produk.produks_id')
            ->where('token_produk', $token)
            ->first();

        $total = $produks->harga * $kuantitas;

        // Buat entri transaksi baru
        $transaction = Transaction::create([
            'quantity' => $kuantitas,
            'users_id' => $pembeli,
            'produks_id' => $produks->id_produks,
            'total_price' => $total,
            'status' => 'pending',
            'harga' => $produks->harga
        ]);

        // Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $orderId = uniqid();

        $params = array(
            'transaction_details' => array(
                'order_id' => $orderId,
                'gross_amount' => $transaction['total_price'],
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->no_telepon,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $transaction->snap_token = $snapToken;
        $transaction->save();

        // Redirect ke halaman checkout dengan parameter yang lebih jelas
        return redirect()->route('checkout', $transaction->id)->with('success', 'Transaksi berhasil dibuat.');
    }

    public function checkout(Request $request, Transaction $transaction)
    {
        $gettoken = $request->query('token');
        $kuantitas = $request->query('quantity');

        // Ambil detail produk berdasarkan token
        $produkDetail = Produk::join('sub_kategoris', 'produks.sub_kategori_id', '=', 'sub_kategoris.id_sub_kategori')
            ->join('users', 'produks.users_id', '=', 'users.id')
            ->join('kategoris', 'sub_kategoris.kategori_id', '=', 'kategoris.id_kategoris')
            ->join('atribut_produk', 'produks.id_produks', '=', 'atribut_produk.produks_id')
            ->where('produks.token_produk', $gettoken)
            ->first();

        return view('pages.checkout', compact('transaction', 'produkDetail', 'kuantitas'));
    }
}
