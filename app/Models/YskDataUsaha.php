<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YskDataUsaha extends Model
{
    protected $fillable = [
        'nama_usaha',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'no_telp',
        'website',
        'email',
    ];
}
