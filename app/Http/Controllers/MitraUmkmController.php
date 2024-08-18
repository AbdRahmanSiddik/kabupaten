<?php

namespace App\Http\Controllers;

use App\Models\Mitra_Umkm;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MitraUmkmController extends Controller
{
    public function daftar()
    {
        $dataUmkm = [
            "getdata" => Mitra_Umkm::all()
        ];


        return view('admin.umkm.daftar_umkm', $dataUmkm);
    }

    public function daftar_action(Request $request)
    {

        $dataUmkm = [
            'nama_umkm' => $request->nama_umkm,
            'alamat_umkm' => $request->alamat_umkm,
            'foto_ktp' => $request->foto_ktp,
            'file_facecame' => $request->file_facecame,
            'logo_umkm' => $request->logo_umkm,
        ];

        Mitra_Umkm::create($dataUmkm);

        return redirect();
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
