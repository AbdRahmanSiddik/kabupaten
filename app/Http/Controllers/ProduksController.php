<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduksController extends Controller
{
    public function index()
    {
        return view('pages.detail_produk');
    }
}
