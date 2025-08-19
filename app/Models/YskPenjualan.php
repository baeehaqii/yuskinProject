<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YskPenjualan extends Model
{
    protected $fillable = [
        'tanggal', 
        'invoice', 
        'nama_pelanggan', 
        'produk_jasa', 
        'produk_dagang', 
        'unit', 
        'uraian', 
        'keterangan'
    ];
}
