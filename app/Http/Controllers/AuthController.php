<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\EmailVariy;
use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;

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

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'no_telepon' => 'nullable|string|max:255',
            'password' => 'required|string|min:8',
        ]);


        $user = User::create([
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "no_telepon" => $request->no_telepon,
            "token_users" => Str::random(100),
            "role" => "customer",
            "name" => "none",
            "alamat_users" => "none",
            "foto_profile" => null
        ]);


        event(new Registered($user));


        Auth::login($user);


        return redirect('/email/verify');
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
            toast('Berhasil Melakukan Perubahan', 'info');

            return redirect('/dashboard/admin');
        } elseif ($authrole == "mitra") {
            return redirect('/dashboard/mitra');
        } elseif ($authrole == 'customer') {
            return redirect('/page');
        }
    }
}
