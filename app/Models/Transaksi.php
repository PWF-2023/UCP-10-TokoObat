<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_customer',
        'jumlah_item',
        'total_item',
        'is_available',
    ];

    protected $casts = [
        'is_available' => 'boolean',
    ];

}
