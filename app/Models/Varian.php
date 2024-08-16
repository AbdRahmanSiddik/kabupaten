<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    use HasFactory;
    protected $table = 'varians';
    protected $guarded = [];

    public static function rawData($request, $produkId)
    {
        $varians = [];
        foreach ($request as $namaVarian) {
            $varians[] = [
                'produks_id' => $produkId,
                'nama_varian' => $namaVarian,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        return $varians;

    }
}
