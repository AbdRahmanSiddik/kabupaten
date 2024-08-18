<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class SettingsController extends Controller
{
    public function index()
    {
        $dataSettings = [
            "getSettings" => User::all(),
        ];

        return view('admin.settings.setting', $dataSettings);
    }

    public function profile($token)
    {

        $detailUser = [
            'Getdata' => Settings::tokenProfile($token)->first()

        ];


        return view('admin.settings.profile', $detailUser);
    }


    public function profile_edit($token)
    {
        $detailUser = [
            'Getdata' => Settings::tokenProfile($token)->first()
        ];

        return view('admin.settings.profile_edit', $detailUser);
    }



    public function profile_edit_action(Request $request,  $token)
    {
        // ddd($request->all());

        $tokenfILE = Str::random(20);

        $file = $request->file('foto_profile');
        $getFile = $tokenfILE . '.' . $file->getClientOriginalExtension();


        $data = [
            "username" => $request->username,
            "name" => $request->name,
            "email" => $request->email,
            "no_telepon" => $request->no_telepon,
            "alamat_users" => $request->alamat_users,
            "foto_profile" => $getFile
        ];



        $file->move(public_path('foto_profile'), $getFile);
        User::where("token_users", $token)->update($data);

        toast('Berhasil Melakukan Perubahan', 'success');

        return redirect('/page');
    }

    public function create()
    {
    }
    public function create_action(Request $request)
    {

        $request->validate([
            'username' => 'required|string|max:255',
            'alamat_users' => 'required|string|max:255',
            'foto_profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);


        $token = uniqid();


        $filePath = null;
        if ($request->hasFile('foto_profile')) {
            $foto = $request->file('foto_profile');
            $fileName = $token . '.' . $foto->getClientOriginalExtension();
            $filePath = $foto->storeAs('public/foto_profiles', $fileName);
        }


        $dataSetting = [
            'username' => $request->username,
            'foto_profile' => $filePath ? basename($filePath) : null,
            'alamat_users' => $request->alamat_users
        ];


        Settings::create($dataSetting);


        return redirect('/setting')->with('success', 'Setting berhasil dibuat!');
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
