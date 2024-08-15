<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class UkuransController extends Controller
{
    public function index()
    {


        return view('admin.ukuran.ukuran');
    }
}
