<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function index()
    {
        $data = [
            'datakurir' => Kurir::get(),
        ];
        return view('admin.super_kurir.super_kurir', $data);
    }

    public function create()
    {

        return view('admin.kurir.kurir_create');
    }

    public function edit($id)
    {

        return view('');
    }
}
