<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra_Umkm extends Model
{
    use HasFactory;

    protected $table = "mitra_umkms";
    protected $guarded = ["id_mitra_umkms", "status"];
}
