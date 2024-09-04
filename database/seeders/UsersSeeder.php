<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "username" => "Admin",
                "email" => "admin@gmail.com",
                "email_verified_at" => now(),
                "password" => bcrypt("123"),
                "no_telepon" => "087740505052",
                "name" => null,
                "role" => "admin",
                "token_users" => Str::random(100),
                "alamat_users" => null,
                'foto_profile' => null,
                'deskripsi' => null
            ],
            [
                "username" => "Customer",
                "email" => "customer@gmail.com",
                "email_verified_at" => now(),
                "password" => bcrypt("123"),
                "no_telepon" => "087740505052",
                "name" => null,
                "role" => "customer",
                "token_users" => Str::random(100),
                "alamat_users" => null,
                'foto_profile' => null,
                'deskripsi' => null

            ],
            [
                "username" => "Mitra",
                "email" => "mitra@gmail.com",
                "email_verified_at" => now(),
                "password" => bcrypt("123"),
                "no_telepon" => "087740505052",
                "name" => null,
                "role" => "mitra",
                "token_users" => Str::random(100),
                "alamat_users" => null,
                'foto_profile' => null,
                'deskripsi' => null

            ],
        ];

        foreach ($data as $item) {
            User::create($item);
        }
    }
}
