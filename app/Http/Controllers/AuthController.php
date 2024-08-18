<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.beranda');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                "email" => "required",
                "password" => "required",
            ],
            [
                "email.required" => "Email Tidak Diisi",
                "password.required" => "Password Tidak Diisi",
            ]
        );

        $cridentials = $request->only(["email", "password"]);

        if (Auth::attempt($cridentials)) {
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard/admin');
            } elseif (auth()->user()->role == 'mitra') {
                return redirect('/dashboard/mitra');
            } elseif (auth()->user()->role == 'customer') {
                return redirect('/page');
            } else {
                return redirect('/')->with('error', 'Role Tidak Diketahui');
            }
        }
        return redirect('/')->with('error', 'Email/Password Salah');
    }



    public function register()
    {
        return view('auth.register');
    }

    public function register_action(Request $request)
    {


        // $request->validate([
        //     'username' => 'required|string|max:255',
        //     "email" => 'required|string|max:255',
        //     'no_telepon' => 'nullable|string|max:255',
        //     'passwords' => 'required',
        // ]);

        $dataRegister = [
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "no_telepon" => $request->no_telepon,
            "token_users" => Str::random(100),
            "role" => "customer",
            "name" => "none",
            "alamat_users" => "none",
            "foto_profile" => "none"


        ];
        User::create($dataRegister);
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    public function AuthRole__()
    {

        $authrole =  auth()->user()->role;

        if ($authrole == "admin") {
            return redirect('/dashboard/admin');
        } elseif ($authrole == "mitra") {
            return redirect('/dashboard/mitra');
        } elseif ($authrole == 'customer') {
            return redirect('/page');
        }
    }
}
