<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategorisController extends Controller
{
    public function index()
    {
        $kategori = Kategori::get();
        return view('admin.kategori.kategori', compact('kategori'));
    }


    public function create()
    {

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
