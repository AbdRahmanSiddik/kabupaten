<?php

namespace App\Http\Controllers;


use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Alamat;
use App\Models\Produk;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function process($token, Request $request)
    {
        $kuantitas = $request->quantity;
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

        // dd($transaction);

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
                'first_name' => auth()->user()->username,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->no_telepon,
            )
        );


        $snapToken = \Midtrans\Snap::getSnapToken($params);
        if (!$snapToken) {
            return redirect()->back()->withErrors('Gagal mendapatkan Snap Token.');
        }
        $transaction->snap_token = $snapToken;

        $transaction->save();



        // Redirect ke halaman checkout dengan parameter yang lebih jelas
        return redirect()->route('checkout', $transaction->id);
    }

    public function checkout(Request $request, Transaction $transaction)
    {
        // Ambil kuantitas dari request
        $kuantitas = $transaction->quantity; // Mengambil data dari input request
        // dd($transaction);
        // Ambil detail produk berdasarkan id_produks dari transaksi
        $produkDetail = Produk::join('sub_kategoris', 'produks.sub_kategori_id', '=', 'sub_kategoris.id_sub_kategori')
            ->join('users', 'produks.users_id', '=', 'users.id')
            ->join('kategoris', 'sub_kategoris.kategori_id', '=', 'kategoris.id_kategoris')
            ->join('atribut_produk', 'produks.id_produks', '=', 'atribut_produk.produks_id')
            ->where('produks.id_produks', $transaction->produks_id) // Menggunakan id_produks dari transaksi
            ->first();


        $userID = auth()->user()->id;
        $getAlamat = Alamat::where('users_id', $userID)->first();

        // Jika produk detail tidak ditemukan, tangani kasus ini
        if (!$produkDetail) {
            // Redirect atau tampilkan pesan error jika produk tidak ditemukan
            return redirect()->route('home')->withErrors('Produk tidak ditemukan.');
        }

        return view('pages.checkout', compact('transaction', 'produkDetail', 'kuantitas', 'getAlamat'));
    }
}
