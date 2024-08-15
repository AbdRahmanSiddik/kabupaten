<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduksController extends Controller
{
    public function index()
    {
        return view('admin.produks.produk');
    }

    public function produk()
    {

        return view('pages.produk');
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
