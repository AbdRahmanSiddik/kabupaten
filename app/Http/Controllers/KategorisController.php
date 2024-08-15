<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategorisController extends Controller
{
    public function index()
    {

        return view('admin.kaetgori.kategori');
    }
}
