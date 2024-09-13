<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SuperKurir;
use Illuminate\Http\Request;

class SuperKurirController extends Controller
{
    public function index()
    {

        $GETallDataKurir = [
            "dataSuper" =>  User::where("role", "superKurir")->get(),

        ];


        return view("admin.superkurir.superkurir", $GETallDataKurir);
    }


    public function create()
    {

        return view("admin.superkurir.superkurir_create");
    }
    public function create_action(Request $request)
    {

        $request->validate([
            "users_id" => "required|unique",
        ]);

        $dataSuper = [
            "users_id" => $request->users_id
        ];
        User::create($dataSuper);

        return redirect("/admin/super-kurir");
    }
}
