<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'stok_barang',
        'harga_barang',
        'is_available',
    ];

    protected $casts = [
        'is_available' => 'boolean',
    ];

}