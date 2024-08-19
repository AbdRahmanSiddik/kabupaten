<?php

namespace App\Http\Controllers;

use App\Models\Mitra_Umkm;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class MitraUmkmController extends Controller
{
    public function umkm()
    {
        $dataUmkm = [
            "getdata" => Mitra_Umkm::JoinUMKMToUser__()->get(),
        ];

        return view('admin.umkm.umkm_view', $dataUmkm);
    }

    public function daftar()
    {
        $dataUmkm = [
            "getdata" => Mitra_Umkm::all()
        ];


        return view('admin.umkm.daftar_umkm', $dataUmkm);
    }

    public function daftar_action(Request $request)
    {
        $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'alamat_umkm' => 'required|string|max:255',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file_facecame' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'logo_umkm' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $TOKEN = Str::random(20);
        $foto_ktp =  $request->file('foto_ktp');
        $file_facecame = $request->file('file_facecame');
        $logo_umkm = $request->file('logo_umkm');

        $FOTO_KTP_NAME = $TOKEN . '_KTP.' .  $foto_ktp->getClientOriginalExtension();
        $FILE_FACECAME_NAME = $TOKEN . '_FACECAME.' . $file_facecame->getClientOriginalExtension();
        $LOGO_UMKM_NAME = $TOKEN . '_LOGO.' . $logo_umkm->getClientOriginalExtension();

        $foto_ktp->move(public_path('foto_ktp'), $FOTO_KTP_NAME);
        $file_facecame->move(public_path('file_facecame'), $FILE_FACECAME_NAME);
        $logo_umkm->move(public_path('logo_umkm'), $LOGO_UMKM_NAME);

        $datauser = [
            'users_id' => auth()->user()->id,
            'nama_umkm' => $request->nama_umkm,
            'alamat_umkm' => $request->alamat_umkm,
            'foto_ktp' => $FOTO_KTP_NAME,
            'file_facecame' => $FILE_FACECAME_NAME,
            'logo_umkm' => $LOGO_UMKM_NAME,
        ];
        $usersId = auth()->user()->id;
        // $getEmail = User::where("id", $usersId)->select("email")->first();



        $user  = [
            "role" => "mitra",
            "email" => "anandamaulanaw1850@gmail.com"
        ];


        User::where("id", $usersId)->update($user);
        Mitra_Umkm::create($datauser);


        event(new Registered($user));
        return redirect('/email/verify');

        // return redirect('/umkm')->with('success', 'UMKM berhasil didaftarkan!');
    }





    public function index()
    {
        return view('admin.umkm.umkm_view');
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
