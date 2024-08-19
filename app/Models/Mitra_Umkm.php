<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mitra_Umkm extends Model
{
    use HasFactory;

    protected $table = "mitra_umkms";
    protected $guarded = ["id_mitra_umkms", "status"];


    public static function JoinUMKMToUser__()
    {
        $query = DB::table('mitra_umkms')->join('users', 'mitra_umkms.users_id', '=', 'users.id');
        return $query;
    }
}
