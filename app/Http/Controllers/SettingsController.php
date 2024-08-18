<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
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
