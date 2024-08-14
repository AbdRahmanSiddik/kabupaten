<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

        $cridentials = $request->only(['email', 'password']);

        if (Auth::attempt($cridentials)) {

            $role = auth()->user()->role;

            if ($role == 'admin') {
                return redirect('/dashboard/admin');
            } elseif ($role == 'mitra') {
                return redirect('/dashboard/admin/mitra');
            } elseif ($role == 'customer') {
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
        $request->validate([
            "username" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:8|confirmed",
        ]);

        $dataRegister = [
            "username" => $request->username,
            "email" => $request->email,
            "password" => $request->password,
            "role" => "customer",
        ];

        User::create($dataRegister);

        return redirect('/login');
    }
}
