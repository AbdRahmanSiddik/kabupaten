<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'quantity',
        'users_id',
        'produks_id',
        'total_price',
        'harga',
        'sedekah',
        'status',
        'snap_token',
        'super_kurir_id'
    ];
}
