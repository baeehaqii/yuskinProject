<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YskDataCabang extends Model
{
    protected $fillable = [
        'nomor_cabang',
        'nama_cabang',
        'alamat',
        'status',
    ];
}
