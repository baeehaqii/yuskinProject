<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YskPenerimaanPengeluaran extends Model
{
    protected $fillable = [
        'tanggal',
        'no_kuitansi',
        'terima_dari',
        'uraian',
        'pengeluaran',
        'penerimaan',
        'rekening',
        'kategori_lk',
        'keterangan',
    ];
}
