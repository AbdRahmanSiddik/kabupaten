<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "username" => "anandamw",
                "email" => "ananda@gmail.com",
                "password" => bcrypt("123"),
                "no_telepon" => "087740505052",
                "name" => "",
                "role" => "admin",
                "alamat_users" => '',
                'foto_profile' => ''
            ],


        ];


        foreach ($data as $item) {
            User::create($item);
        }
    }
}
