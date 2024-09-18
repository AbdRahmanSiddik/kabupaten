<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DetailTransactionController extends Controller
{
    public function index()
    {

        $dataPembeli = Transaction::join('users', 'transactions.users_id', '=', 'users.id')->join('produks', 'transactions.produks_id', '=', 'produks.id_produks')->get();


        return view('admin.detail_transaksi.page', compact('dataPembeli'));
    }
}
