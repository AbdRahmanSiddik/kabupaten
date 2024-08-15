<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProduksController extends Controller
{
    public function ckeditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            $token = Str::random(10);

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $token . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

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
