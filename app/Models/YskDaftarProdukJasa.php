<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YskDaftarProdukJasa extends Model
{
    protected $fillable = [
        'nomor_produk',
        'nama_produk',
        'gol_harga_1',
        'gol_harga_2',
        'gol_harga_3',
        'gol_harga_4',
        'gol_harga_5',
        'keterangan',
    ];
}
