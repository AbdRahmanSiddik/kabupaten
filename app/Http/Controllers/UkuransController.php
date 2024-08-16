<?php

namespace App\Http\Controllers;

use App\Models\Ukuran;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UkuransController extends Controller
{
    public function index()
    {
        $dataUkuran = [
            "getUkuran" => Ukuran::ukuranJoinProduk()

        ];

        return view('admin.ukuran.ukuran', $dataUkuran);
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
