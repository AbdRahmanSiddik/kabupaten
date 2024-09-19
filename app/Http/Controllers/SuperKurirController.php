<?php

namespace App\Http\Controllers;

use App\Mail\MendaftarkanKurir;
use App\Models\Kurir;
use App\Models\User;
use App\Models\SuperKurir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SuperKurirController extends Controller
{
    public function index()
    {

        $GETallDataKurir = [
            "datakurir" =>  Kurir::
            join('users', 'users.id', '=', 'kurirs.users_id')
            ->where('super_kurir_id', auth()->user()->id)
            ->get(),

        ];

        return view("admin.super_kurir.super_kurir", $GETallDataKurir);
    }

    public function create()
    {
        return view("admin.super_kurir.kurir_create");
    }

    public function store(Request $request)
    {
        $idSuperKurir = auth()->user()->id;
        $email = $request->email;
        $noTelpon = $request->nomer_telepon;
        $token = Str::random(5);
        $password = $token.'kurir'.substr($noTelpon, -4);
        $file = $request->file('thumbnail');
        if(isset($file)){
            $file_name = $token.'.'.$file->getClientOriginalExtension();
            $file->move('foto_profile', $file_name);
        } else {
            $file_name = 'default.png';
        }

        $dataUser = [
            'username' => $request->nama_kurir,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => bcrypt($password),
            'token_users' => Str::random(100),
            'no_telepon' => $noTelpon,
            'foto_profile' => $file_name,
            'role' => 'kurir',
        ];

        $idKurir = User::insertGetId($dataUser);
        Mail::to($email)->send(new MendaftarkanKurir($password));

        Kurir::create([
            'users_id' => $idKurir,
            'super_kurir_id' => $idSuperKurir,
            'status_kurir' => 'aktif',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect("/$idSuperKurir/dashboard")->with([
            'success' => 'Berhasil Mendaftarkan kurir'
        ]);
    }

    public function tugas()
    {
        $data = [];

        return view('admin.super_kurir.tugas', $data);
    }
}
