<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YskPembelian extends Model
{
    protected $fillable = [
        'tanggal', 
        'no_po', 
        'produk_dagang', 
        'unit', 
        'uraian', 
        'no_urut_po', 
        'jumlah', 
        'harga_unit', 
        'total', 
        'rekening', 
        'kategori_lk', 
        'keterangan'
    ];
}
