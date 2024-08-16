<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ["id_produks"];

    public static function ProdukJoinUsers()
    {
        return  DB::Table("produks")->join("users", "produks.users_id", "=", "users.id");
    }
}
