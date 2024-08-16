<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ukuran extends Model
{
    use HasFactory;


    protected $table = "ukurans";
    protected $guarded = ["id"];



    public static function ukuranJoinProduk()
    {
        return DB::Table("ukurans")->join("produks", "ukurans.produks_id", "=", "produks.id_produks")->get();
    }

    public static function rawData($request, $produkId)
    {
        $ukurans = [];
        foreach ($request as $ukuran) {
            $ukurans[] = [
                'produks_id' => $produkId,
                'nama_ukuran' => $ukuran,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        return $ukurans;
    }
}
