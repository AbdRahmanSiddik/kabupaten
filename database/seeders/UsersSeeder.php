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
                "password" => bcrypt("ananda"),
                "no_telepon" => "087740505052",
                "role" => "admin",
            ],
            [
                "username" => "rahman",
                "email" => "rahman@gmail.com",
                "password" => bcrypt("rahman"),
                "no_telepon" => "087740505052",
                "role" => "admin",
            ],
            [
                "username" => "yanto",
                "email" => "yanto@gmail.com",
                "password" => bcrypt("yanto"),
                "no_telepon" => "087454545676",
                "role" => "customer",
            ],
            [
                "username" => "yanti",
                "email" => "yanti@gmail.com",
                "password" => bcrypt("yanti"),
                "no_telepon" => "0823545553333",
                "role" => "mitra",
            ],

        ];


        foreach ($data as $item) {
            User::create($item);
        }
    }
}
