<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YskDataAkun extends Model
{
    protected $fillable = [
        'akun',
        'nama_akun',
        'keterangan',
    ];
}
