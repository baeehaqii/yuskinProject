<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YskDaftarProdukDagang extends Model
{
    protected $fillable = [
        'nomor_produk',
        'nama_produk',
        'kategori_produk',
        'unit',
        'jumlah',
        'harga_perunit',
    ];
}
