<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function index()
    {

        return view('admin.kurir.kurir');
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
