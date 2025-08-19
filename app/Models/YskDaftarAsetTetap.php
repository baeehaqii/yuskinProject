<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YskDaftarAsetTetap extends Model
{
    protected $fillable = [
        'no_aset',
        'nama',
        'uraian',
        'tanggal_pembelian',
        'harga_pembelian',
        'tanggal_penjualan',
        'harga_penjualan',
        'kategori_aset',
        'nilai_penyusutan_awal',
        'nilai_penyusutan_akhir',
        'nilai_buku',
    ];
}
